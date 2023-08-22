<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuditorRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'names' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:auditors',
            'telephone' => 'required|string|max:15',
        ];
    }
}
