<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StaffRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('staff.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('staff')->attempt($credentials)) {
            return redirect()->intended('/staff/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('staff.register');
    }

    public function register(StaffRegisterRequest $request)
    {
        $validatedData = $request->validated();

        $staff = Staff::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'telephone' => $validatedData['telephone'],
        ]);

        $smsApi = new SmsApiController();
        $message = "Dear " . $validatedData['name'] . " , your staff account registration is successful.";
        $smsApi->sendSms($staff->telephone, $message);

        Auth::guard('staff')->login($staff);

        return redirect('/staff/dashboard');
    }

    public function logout()
    {
        Auth::guard('staff')->logout();
        return redirect('/staff/login');
    }
}
