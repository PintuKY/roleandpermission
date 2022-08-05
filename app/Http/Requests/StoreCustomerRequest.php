<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'  => 'required',
            'last_name'   => 'required',
            'phone'       => 'required',
            'address1'    => 'required',
            'address2'    => 'required',
            'city'        => 'required',
            'landmakr'    => 'required',
            'post_office' => 'required',
            'pincode'     => 'required',
            'country'     => 'required',
            'state'       => 'required'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'A first name is required',
            'last_name.required'  => 'A last name is required',
            'address1.required'   => 'address1 is required',
            'address2.required'   => 'address2 is required',
            'pincode.required'    => 'pin code is required',
            'landmakr.required'   => 'A land mark is required'
        ];
    }

    // The first_name is required.
    // The first name is required.

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'first_name' => "first name",
            'last_name'  => "last name",
            'pincode'    => "pin code",
            'landmakr'   => "land mark",

        ];
    }
}
