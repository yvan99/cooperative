<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerLoginRequest;
use App\Models\Owner;
use App\Http\Requests\OwnerRegisterRequest;
use Illuminate\Support\Facades\Auth;

class OwnerAuthController extends Controller
{

    protected $redirectTo = '/owner/dashboard';
    protected $redirectToLogout = '/owner/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('owner');
    }

    public function showLoginForm()
    {
        return view('owner.login');
    }

    public function login(OwnerLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('owner')->attempt($credentials)) {
            return response()->json(['status' => 'success', 'redirectTo' => $this->redirectTo]);
        }

        return response()->json(['status' => 'error']);
    }

    public function showRegistrationForm()
    {
        return view('owner.register');
    }


    public function register(OwnerRegisterRequest $request)
    {
        $validatedData = $request->validated();

        $owner = Owner::create([
            'names' => $validatedData['names'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'telephone' => $validatedData['telephone'],
        ]);

        $smsApi = new SmsApiController();
        $message = "Dear " . $validatedData['names'] . " , your registration is successful.  Login to your account to create and manage your cooperatives";
        $smsApi->sendSms($owner->telephone, $message);

        Auth::guard('owner')->login($owner);

        return response()->json(['status' => 'success', 'redirectTo' => '/owner/dashboard']);
    }


    public function logout()
    {
        Auth::guard('owner')->logout();
        session()->forget('defaultCooperativeId');
        session()->forget('defaultCooperativeName');
        return view('logout');
    }
    
}
