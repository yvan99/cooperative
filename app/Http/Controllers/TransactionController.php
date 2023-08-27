<?php

    namespace App\Http\Controllers;

    use App\Models\Account;
use App\Models\Cooperative;
use App\Models\FinanceCategory;
    use App\Models\Transaction;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use PDF;

    class TransactionController extends Controller {
        public function index() {
            $defaultCooperativeId = Session::get('defaultCooperativeId');

            if (!$defaultCooperativeId) {
                return redirect()->route('cooperatives.index')->with('no-cooperative', 'Please set a default cooperative first.');
            }

            $transactions = Transaction::where('cooperative_id', $defaultCooperativeId)->get();
            $financeCategories = FinanceCategory::where('cooperative_id', $defaultCooperativeId)->get();
            $accounts = Account::where('cooperative_id', $defaultCooperativeId)->get();
            // $cooperatives = Cooperative::all();

            return view('Transaction.index', compact('transactions', 'financeCategories', 'accounts'));
        }

        public function auditorTrans() {
            $transactions = Transaction::all();
            $financeCategories = FinanceCategory::all();
            $accounts = Account::all();
            $cooperatives = Cooperative::all();

            return view('auditor.transaction.index', compact('transactions', 'financeCategories', 'accounts','cooperatives'));
        }



        public function store(Request $request) {
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

        /**
         * Generate reports for transactions within Given Yeah and Month.
         *
         * Retrieves and generates reports for all transactions that occurred within
         * the Given Yeah and Month.
         *
         * @param Request $request
         * @return \Illuminate\Support\Collection
         */
        public function generateReports(Request $request) {
            $year = $request->input('year');
            $month = $request->input('month');

            $defaultCooperativeId = Session::get('defaultCooperativeId');

            if (!$defaultCooperativeId) {
                return redirect()->route('cooperatives.index')->with('no-cooperative', 'Please set a default cooperative first.');
            }

            $transactions = ($month == "annually")
                ? Transaction::where('cooperative_id', $defaultCooperativeId)->whereYear('date', $year)->get()
                : Transaction::where('cooperative_id', $defaultCooperativeId)->whereYear('date', $year)->whereMonth('date', $month)->get();

            $report = ['year' => $year, 'month' => $month, 'transactions' => $transactions];

            view()->share('transactions', $report);
            $pdf = PDF::loadView('auditor.transaction.report', $report);

            return $pdf->download($year . '_' . $month . '_transactions' . '.pdf');
        }

        /**
         * Generate reports for transactions within Given Yeah and Month.
         *
         * Retrieves and generates reports for all transactions that occurred within
         * the Given Yeah and Month.
         *
         * @param Request $request
         * @return \Illuminate\Support\Collection
         */
        public function generateAuditorTransReports(Request $request) {
            $year = $request->input('year');
            $month = $request->input('month');
            $cooperative = $request->input('cooperative');

            $transactions = ($month == "annually")
                ? Transaction::where('cooperative_id', $cooperative)->whereYear('date', $year)->get()
                : Transaction::where('cooperative_id', $cooperative)->whereYear('date', $year)->whereMonth('date', $month)->get();

            $report = ['year' => $year, 'month' => $month, 'transactions' => $transactions];

            view()->share('transactions', $report);
            $pdf = PDF::loadView('auditor.transaction.report', $report);

            return $pdf->download($year . '_' . $month . '_transactions' . '.pdf');
        }
    }
