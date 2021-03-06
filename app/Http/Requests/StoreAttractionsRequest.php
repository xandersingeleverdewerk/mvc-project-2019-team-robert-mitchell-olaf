<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttractionsRequest extends FormRequest
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
            'name' => 'required|max:45',
            'description' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'waitTime' => 'required',
            'minAge' => 'nullable|integer|between:0,18',
            'minLength' => 'nullable|numeric',
        ];
    }
}
