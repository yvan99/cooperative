<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffLoginRequest;
use App\Models\Staff;
use App\Http\Requests\StaffRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffAuthController extends Controller
{

    protected $redirectTo = '/staff/dashboard';
    protected $redirectToLogout = '/staff/login';

    public function showLoginForm()
    {
        return view('staff.login');
    }

    public function login(StaffLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('owner')->attempt($credentials)) {
            return response()->json(['status' => 'success', 'redirectTo' => $this->redirectTo]);
        }

        return response()->json(['status' => 'error']);
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
