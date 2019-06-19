<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsersRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            //
            'name' => 'required' .$user->id,
            'date_of_birth' => 'required',
            'adress' => 'required',
            'house_number' => 'required',
            'postal_code' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
        ];
    }
}
