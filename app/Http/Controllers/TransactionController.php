<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['financeCategory', 'cooperative', 'account'])->get();
        $accounts = Account::all();

        return view('transaction.index', compact('transactions', 'accounts'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'finance_category_id' => 'required|exists:finance_categories,id',
            'cooperative_id' => 'required|exists:cooperatives,id',
            'amount' => 'required|numeric',
            'account_id' => 'nullable|exists:accounts,id',
        ]);

        $getGeneratedCode = new AccountController;
        $transaction = new Transaction([
            'code' => $getGeneratedCode->generateRandomAccountCode('TX-'),
            'finance_category_id' => $request->finance_category_id,
            'cooperative_id' => $request->cooperative_id,
            'year' => now()->year,
            'month' => now()->format('F'),
            'date' => now()->toDateString(),
            'amount' => $request->amount,
            'status' => 'approved',
            'account_id' => $request->account_id,
            'description' => $request->description,
        ]);

        $transaction->save();

        if ($transaction->financeCategory->type === 'income') {
            $account = Account::find($transaction->account_id);
            if ($account) {
                $account->amount += $transaction->amount;
                $account->save();
            }
        } elseif ($transaction->financeCategory->type === 'expense') {
            $account = Account::find($transaction->account_id);
            if ($account) {
                $account->amount -= $transaction->amount;
                $account->save();
            }
        }
        $transaction->save();

        return redirect()->route('transaction.index')->with('success', 'Transaction created successfully.');
    }
}
