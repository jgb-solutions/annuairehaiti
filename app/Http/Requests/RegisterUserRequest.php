<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterUserRequest extends Request
{
    public function authorize()
    {
        return true;
    }

   public function rules()
   {
      return $rules = [
         'firstname'      => 'required',
         'lastname'      => 'required',
         'email'     => 'required|email|different:firstname|different:lastname',
         'password'  => 'required|same:password_confirm'
      ];
   }
}
