<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'first_name' => 'required|string|min:3|max:25',
            'middle_name' => 'nullable|string|min:3|max:25',
            'last_name' => 'required|string|min:3|max:25',
            'birthday' => 'required|date',
            'email' => 'required|email|min:3|max:25',
            'phone' => 'required',
            'address' => 'required|string|min:8',
            'gender' => 'required|',

            'height' => 'required',
            'weight' => 'required',
            'activity' => 'required',
            'bmr' => 'required',
            'tde' => 'required',

            'goal' => 'required',
            'start_goal' => 'required',
            'ideal_goal' => 'required',
            'max_goal' => 'required',
            'macros' => 'required',

            'diet_type' => 'required',

        ];
    }
}
