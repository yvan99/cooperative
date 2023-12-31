<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuditorRegisterRequest;
use App\Models\Auditor;
use App\Models\AuditorComment;
use App\Models\Cooperative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuditorController extends Controller
{
    public function register(AuditorRegisterRequest $request)
    {
        $validatedData = $request->validated();
        $randomPassword = bin2hex(random_bytes(6));

        $auditor = Auditor::create([
            'names' => $validatedData['names'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'password' => bcrypt($randomPassword),
        ]);


        $smsApi = new SmsApiController();
        $message = "Dear RCA Auditor" . $validatedData['names'] . " , your registration is successful. Your password is: $randomPassword";
        $smsApi->sendSms($auditor->telephone, $message);

        Auth::guard('auditor')->login($auditor);

        return redirect()->back()->with('success', 'Auditor Registered successfully.');
    }

    public function index() {
        $auditors = Auditor::all();
        return view('auditor.index', compact('auditors'));
    }

    public function addComment(Request $request) {
        $validator = Validator::make($request->all(), [
            'cooperativeId' => 'required|exists:cooperatives,id',
            'comment' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $cooperativeId = $request->input('cooperativeId');
        $coopComment = $request->input('comment');
    
        $cooperative = Cooperative::where('id', $cooperativeId)->first();
       
        $owner = $cooperative->owners->first();
    
        $smsApi = new SmsApiController();
        $message = "Dear " .$owner->names. " You have received a comment from RCA auditor Please check your account.";
        $smsApi->sendSms($owner->telephone, $message);
    
        AuditorComment::create([
            'auditor_id' => Auth::user()->id,
            'cooperative_id' => $cooperativeId,
            'message' => $coopComment
        ]);
    
        return redirect()->back()->with('success', 'Comment sent successfully');
    }

}
