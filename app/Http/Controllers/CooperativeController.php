<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cooperative;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CooperativeController extends Controller
{

    public function index()
    {
        $loggedInOwnerId = auth()->user()->id; 
        $cooperatives = Owner::find($loggedInOwnerId)->cooperatives;
        $categories = Category::all();

        return view('cooperatives.index', compact('cooperatives', 'categories'));
    }


    public function cooperativeStaff()
    {
        $cooperatives = Cooperative::all();
        $categories = Category::all();
        return view('staff.dashboard', compact('cooperatives', 'categories'));
    }

    public function approveCooperative(Cooperative $cooperative)
    {
        if ($cooperative->status === 'pending') {
            $cooperative->update(['status' => 'approved']);
            $owner = $cooperative->owners->first();
            if ($owner) {
                $smsApi = new SmsApiController();
                $message = "Dear " . $owner->names . ", your cooperative '" . $cooperative->name . "' is now approved.";
                $smsApi->sendSms($owner->telephone, $message);
            }

            return redirect()->back()->with('success', 'Cooperative approved successfully.');
        } else {
            return redirect()->back()->with('error', 'Cooperative cannot be approved.');
        }
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
