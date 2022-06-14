<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname'=> 'required|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|max:255',
            'company' => 'required|max:255',
        ];
    }


    public function messages(){
        $messages = [
            'fullname.required' => 'fullname_required',
            'fullname.max'      => 'fullname_max',
            'email.required'    => 'email_required',
            'email.email'       => 'email_email',
            'email.max'         => 'email_max',
            'phone.required'    => 'phone_required',
            'phone.max'         => 'phone_max',
            'company.required'  => 'company_required',
            'company.max'       => 'company_max',

        ];

        return $messages;
    }
}
