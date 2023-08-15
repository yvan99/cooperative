<?php

namespace App\Http\Controllers;

use App\Models\FinanceCategory;
use Illuminate\Http\Request;

class FinanceCategoryController extends Controller
{
    public function index()
    {
        $financeCategories = FinanceCategory::all();
        return view('categories.index', compact('financeCategories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'cooperative_id' => 'required|exists:cooperatives,id',
            'type' => 'required|in:income,expense',
            'status' => 'required',
        ]);

        $getCode = new AccountController;
        $data['code'] = $getCode->generateRandomAccountCode('CAT-');
        FinanceCategory::create($data);

        return redirect()->route('categories.index')->with('success', 'Finance category registered successfully.');
    }
}
