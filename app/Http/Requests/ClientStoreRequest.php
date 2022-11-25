<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'name'          => 'required|string|max:255',
            'email'         => 'required|email',
            'password'      => 'required',
            'phone'         => 'required|string',
            'city'          => 'required|string',
            'state'         => 'required|string',
            'street_name'   => 'required|string',
            'street_number' => 'required|string',  
        ];
    }
}
