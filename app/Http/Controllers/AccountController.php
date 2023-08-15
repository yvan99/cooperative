<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $data['cooperative_id'] = localStorage.getItem('defaultCooperativeId');

        Account::create($data);

        return redirect()->route('accounts.index')->with('success', 'Account registered successfully.');
    }
}
