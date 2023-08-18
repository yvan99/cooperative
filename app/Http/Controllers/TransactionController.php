<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Cooperative;
use App\Models\FinanceCategory;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        $financeCategories = FinanceCategory::all();
        $cooperatives = Cooperative::all();
        $accounts = Account::all();

        return view('Transaction.index', compact('transactions', 'financeCategories', 'cooperatives', 'accounts'));
    }

    public function store(Request $request)
    {

        $getGeneratedCode = new AccountController;

        $request->validate([
            'finance_category_id' => 'required|exists:finance_categories,id',
            'cooperative_id' => 'required|exists:cooperatives,id',
            'amount' => 'required|numeric',
            'account_id' => 'nullable|exists:accounts,id',
        ]);


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

        if ($transaction->financeCategory->type === 'income') {
            $account = Account::find($request->account_id);

            if ($account) {
                $account->amount += $transaction->amount;


                $account->save();
            }
        } elseif ($transaction->financeCategory->type === 'expense') {
            $account = Account::find($request->account_id);
            if ($account) {
                $account->amount -= $transaction->amount;
                $account->save();
            }
        }
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction created successfully.');
    }

    public function generateReports(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');

        // You can customize the logic to generate reports based on the selected year and month
        // Example: Fetch transactions based on year and month
        $transactions = Transaction::whereYear('date', $year)
            ->when($month, function ($query, $month) {
                return $query->whereMonth('date', $month);
            })
            ->get();

        $view = view('transactions.report', compact('transactions', 'year', 'month'));
        return response($view)->header('Content-Type', 'application/pdf');
    }
}
