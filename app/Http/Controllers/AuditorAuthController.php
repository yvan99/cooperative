<?php

namespace App\Http\Controllers;

use App\Models\Auditor;
use App\Http\Requests\AuditorRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuditorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auditor.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('auditor')->attempt($credentials)) {
            return redirect()->intended('/auditor/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('auditor.register');
    }

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

    public function logout()
    {
        Auth::guard('auditor')->logout();
        return redirect('/auditor/login');
    }
}