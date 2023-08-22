<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuditorLoginRequest;
use Illuminate\Support\Facades\Auth;

class AuditorAuthController extends Controller
{

    protected $redirectTo = '/auditor/dashboard';
    protected $redirectToLogout = '/auditor/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('auditor');
    }

    public function showLoginForm()
    {
        return view('auditor.login');
    }

    public function login(AuditorLoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::guard('auditor')->attempt($credentials)) {
            return response()->json(['status' => 'success', 'redirectTo' => $this->redirectTo]);
        }

        return response()->json(['status' => 'error']);
    }



    public function logout()
    {
        Auth::guard('auditor')->logout();
        return redirect('/auditor/login');
    }
}
