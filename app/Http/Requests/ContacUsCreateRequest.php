<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContacUsCreateRequest extends FormRequest
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
            'name' => 'required|min:3|max:40',
            'email' => 'email:rfc,dns',
            'phone_number' => 'min:6|max:15',
            'message' => 'min:5|max:400',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'write your name, please',
            'message.min' => 'Seriously? is that all you wanted to write?',
        ];
    }
}
