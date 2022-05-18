<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'notes'=> 'required'
        ];
    }
    public function messages()
    {
        return [
            'first_name.required'=>'Input First Name, Please!',
            'last_name.required'=>'Input Last Name, Please!',
            'email.required'=>'Input Email, Please!',
            'phone.required'=>'Input Phone, Please!',
            'notes.required'=>'Input Notes, Please!',
        ];
    }
}
