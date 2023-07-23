<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerLoginRequest;
use App\Models\Owner;
use App\Http\Requests\OwnerRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('owner.login');
    }

    public function login(OwnerLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('owner')->attempt($credentials)) {
            return redirect()->intended('/owner/dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function showRegistrationForm()
    {
        return view('owner.register');
    }

    public function register(OwnerRegisterRequest $request)
    {
        $validatedData = $request->validated();

        $owner = Owner::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'telephone' => $validatedData['telephone'],
        ]);
        $smsApi = new SmsApiController();
        $message = "Dear " . $validatedData['name'] . " , your registration is successful.  Login to your account to create and manage your cooperatives";
        $smsApi->sendSms($owner->telephone, $message);

        Auth::guard('owner')->login($owner);

        return redirect('/owner/dashboard');
    }

    public function logout()
    {
        Auth::guard('owner')->logout();
        return redirect('/owner/login');
    }
}
