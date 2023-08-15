<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cooperative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CooperativeController extends Controller
{

    public function index()
    {
        $cooperatives = Cooperative::all();
        $categories = Category::all();
        return view('cooperatives.index', compact('cooperatives', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'certificate' => 'required|file|mimes:pdf',
            'category_id' => 'required|exists:categories,id',
            'currency' => 'required|string',
            'address' => 'required|string',
            'members' => 'required|integer|min:1',
        ]);

        $certificatePath = $request->file('certificate')->store('certificates', 'public');

        $cooperative = new Cooperative([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'certificate' => $certificatePath,
            'category_id' => $request->input('category_id'),
            'currency' => $request->input('currency'),
            'address' => $request->input('address'),
            'status' => 'pending',
            'members' => $request->input('members'),
        ]);
        $cooperative->save();
        $cooperative->owners()->attach(Auth::user()->id);

        return redirect()->back()
            ->with('success', 'Cooperative registered successfully. Wait for the Approval');
    }
}
