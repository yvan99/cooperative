<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuditorRegisterRequest;
use App\Models\Auditor;
use Illuminate\Support\Facades\Auth;

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

    public function index()
    {
        $auditors = Auditor::all();
        return view('auditor.index', compact('auditors'));
    }
}
