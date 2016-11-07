<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname'      => 'required',
            'lastname'      => 'required',
            'email'     => 'required|email|different:firstname|different:lastname',
            'password'  => 'min:6|same:password_confirm',
            // 'image'     => 'image'
        ];
    }
}
