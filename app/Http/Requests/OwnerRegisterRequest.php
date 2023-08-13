<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'names' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:owners',
            'password' => 'required|string|min:8',
            'telephone' => 'required|string|max:15',
        ];
    }
}
