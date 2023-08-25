<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DefaultCooperativeController extends Controller
{
    public function set(Request $request)
    {
        $cooperativeId = $request->input('cooperativeId');
        $cooperativeName = $request->input('cooperativeName');

        Session::put('defaultCooperativeId', $cooperativeId);
        Session::put('defaultCooperativeName', $cooperativeName);

        return response()->json(['message' => 'Default cooperative set.']);
    }

    public function get()
    {
        $defaultCooperativeId = Session::get('defaultCooperativeId');
        $defaultCooperativeName = Session::get('defaultCooperativeName');

        return response()->json([
            'defaultCooperativeId' => $defaultCooperativeId,
            'defaultCooperativeName' => $defaultCooperativeName,
        ]);
    }
}
