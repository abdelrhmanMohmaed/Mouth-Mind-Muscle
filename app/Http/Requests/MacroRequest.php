<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MacroRequest extends FormRequest
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
            'name' => 'required|string|min:3',

            'min_cho' => 'required',
            'ideal_cho' => 'required',
            'max_cho' => 'required',

            'min_protien' => 'required',
            'ideal_protien' => 'required',
            'max_protien' => 'required',

            'min_fat' => 'required',
            'ideal_fat' => 'required',
            'max_fat' => 'required',
        ];
    }
}
