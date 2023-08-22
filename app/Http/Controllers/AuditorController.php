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
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'password' => bcrypt($randomPassword),
        ]);


        $smsApi = new SmsApiController();
        $message = "Dear RCA Auditor" . $validatedData['name'] . " , your registration is successful. Your password is: $randomPassword";
        $smsApi->sendSms($auditor->telephone, $message);

        Auth::guard('auditor')->login($auditor);

        return redirect('/auditor/dashboard');
    }

    public function index()
    {
        $auditors = Auditor::all();
        return view('auditor.index', compact('auditors'));
    }
}
