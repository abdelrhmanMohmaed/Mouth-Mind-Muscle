<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KcalRequest extends FormRequest
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
            'num_MILK_Skimmed' => 'required',
            'num_MILK_Low_Fat' => 'required',
            'num_MILK_Full_Fat' => 'required',
            'num_VEGETABLE' => 'required',
            'num_FRUIT' => 'required',
            'num_STARCH' => 'required',
            'num_PROTEINS_Lean_Meat' => 'required',
            'num_PROTEINS_Medium_Fat' => 'required',
            'num_PROTEINS_High_Fat' => 'required',
            'num_FAT' => 'required',
            'num_HALFSTLMFAT_Soup' => 'required',
            'num_HALFSTLMFAT_Appetizer' => 'required',
            'num_STLMFAT_Prepared_Meals' => 'required',
            'num_STLMFAT_Fast_Food' =>  'required',
            'num_BEVERAGES' =>  'required',
            'num_ALCOHOL' =>  'required',
            'num_CHO' => 'required',
            'num_MISCELLANEOUS' => 'required',
            'num_SUPPLEMENTS' =>  'required',
            'patient_id' => 'required'
        ];
    }
}
