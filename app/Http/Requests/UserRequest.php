<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
     * Validation message
     * 
     * @return type
     */
    public function messages()
    {
        return [
            'email.required' => 'how about the email?',
            'name.required' => 'how about the name?',
            'password.required' => 'Please enter password',
            'role.required' => 'Please select role',
            'photo' => ['required', 'mimes', 'max'],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
            'photo' => ['mimes:jpeg,bmp,png,jpg', 'max:255'],
        ];
    }
}
