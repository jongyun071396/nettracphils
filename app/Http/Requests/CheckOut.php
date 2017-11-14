<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;


class CheckOut extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $cc_rule = $this->input('payment_method') == 'credit-card' ? 'required' : '';
      
        if (auth::check()) {
            return [
                'payment_method'            => 'required',
                'cc_number'                 => $cc_rule.'|numeric',
                'cc_security_number'        => $cc_rule,
                'expiration_month'          => $cc_rule,
                'expiration_year'           => $cc_rule,
                'agree_terms'               => 'required',
            ];
        }

        return [
            'fname'                     => 'required',
            'lname'                     => 'required',
            'company_name'              => 'required',
            'phone_number'              => 'required',
            'country'                   => 'required',
            'city'                      => 'required',
            'state'                     => 'required',
            'postal'                    => 'required',
            'address1'                  => 'required',
            'email'                     => 'required|email|unique:users',
            'username'                  => 'required|min:4|unique:users',
            'password'                  => 'required|min:6|confirmed',
            'password_confirmation'     => 'required',
            'payment_method'            => 'required',
            'cc_number'                 => $cc_rule.'|numeric',
            'cc_security_number'        => $cc_rule,
            'expiration_month'          => $cc_rule,
            'expiration_year'           => $cc_rule,
            'agree_terms'               => 'required',
        ];
    }

    public function messages() {
        return [
            'required'              => 'This field is required.',
            'email.unique'          => 'This is already taken. Please enter a different one.',
            'email.email'           => 'Please enter a valid email address.', 
            'agree_terms.required'  => 'You must agree to the Terms of Service',
        ];
    }

}
