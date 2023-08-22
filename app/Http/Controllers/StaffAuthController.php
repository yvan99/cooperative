<?php

namespace App\Http\Controllers;
use App\Http\Requests\StaffLoginRequest;
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

        if (Auth::guard('staff')->attempt($credentials)) {
            return response()->json(['status' => 'success', 'redirectTo' => $this->redirectTo]);
        }

        return response()->json(['status' => 'error']);
    }


    public function logout()
    {
        Auth::guard('staff')->logout();
        return redirect('/staff/login');
    }
}
