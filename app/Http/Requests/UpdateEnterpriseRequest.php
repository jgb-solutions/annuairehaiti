<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateEnterpriseRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      return [
         'name'          => 'required|min:3',
         'telephone'     => 'required',
         'fax'           => 'required',
         'email'         => 'required|email',
         'website'       => 'url',
         'address'       => 'required|min:5 10',
         'category_id'   => 'required',
         'department_id' => 'required',
         'city_id'       => 'required',
         'town_id'       => 'required',
         'details'       => 'required',
         'logo'          => 'image',
         'header_image'  => 'image',
         'facebook'      => 'url',
         'twitter'       => 'url',
         'google'        => 'url'
        ];
    }
}
