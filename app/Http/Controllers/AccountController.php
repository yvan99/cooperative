<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function index()
    {
        $defaultCooperativeId = Session::get('defaultCooperativeId');
        
        if (!$defaultCooperativeId) {
            return redirect()->route('owner.dashboard')->with('error', 'Please set a default cooperative first.');
        }
    
        $accounts = Account::where('cooperative_id', $defaultCooperativeId)->get();
        return view('accounts.index', compact('accounts'));
    }
    

    public function generateRandomAccountCode($prefix)
    {
        $length = 8;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = $prefix;

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'currency' => 'required',
            'amount' => 'required|numeric',
            'cooperative_id' => 'required|exists:cooperatives,id',
        ]);
        $data['code'] = $this->generateRandomAccountCode('ACT-');
        Account::create($data);
        return redirect()->route('accounts.index')->with('success', 'Account registered successfully.');
    }
}
