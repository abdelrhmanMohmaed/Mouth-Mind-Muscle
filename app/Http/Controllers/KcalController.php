<?php

namespace App\Http\Controllers;

use App\Http\Requests\KcalRequest;
use App\Models\InputCalculation;
use App\Models\Kcal;
use App\Models\PatientDetail;
use Exception;
use Illuminate\Http\Request;

class KcalController extends Controller
{
    public function index($slug)
    {
        $kcals = Kcal::get();
        $inputCal = InputCalculation::get();
        $patient_detail = PatientDetail::with(['macro', 'patient'])
            ->where('slug', $slug)
            ->first();
        if (!$patient_detail) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        return view(
            'web.kcal.index',
            compact('kcals', 'patient_detail', 'inputCal')
        );
    }

    public function store(KcalRequest $request)
    {
        $slug =
            PatientDetail::where('patient_id', $request->patient_id)
            ->first(['slug']);
        if (!$slug) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        try {
            InputCalculation::create([
                'milk_s' => $request->num_MILK_Skimmed,
                'milk_l' => $request->num_MILK_Low_Fat,
                'milk_f' => $request->num_MILK_Full_Fat,
                'vegetable' => $request->num_VEGETABLE,
                'fruit' => $request->num_FRUIT,
                'starch' => $request->num_STARCH,
                'proteins_l' => $request->num_PROTEINS_Lean_Meat,
                'proteins_m' => $request->num_PROTEINS_Medium_Fat,
                'proteins_h' => $request->num_PROTEINS_High_Fat,
                'fat' => $request->num_FAT,
                'halfstlmfat_s' => $request->num_HALFSTLMFAT_Soup,
                'halfstlmfat_a' => $request->num_HALFSTLMFAT_Appetizer,
                'stlmfat_p' => $request->num_STLMFAT_Prepared_Meals,
                'stlmfat_f' => $request->num_STLMFAT_Fast_Food,
                'beverages' => $request->num_BEVERAGES,
                'alcohol' => $request->num_ALCOHOL,
                'cho' => $request->num_CHO,
                'miscellaneous' => $request->num_MISCELLANEOUS,
                'supplements' => $request->num_SUPPLEMENTS,
                'slug' => $slug->slug,
                'patient_id' => $request->patient_id
            ]);

            return redirect()->route('patient.index')->with("success", "Data added Successfully !!");
        } catch (Exception $e) {

            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again !!');
        }
    }

    public function edit($slug)
    {
        $kcals = Kcal::get();
        $inputCal = InputCalculation::where('slug', $slug)->first();
        $patient_detail = PatientDetail::with(['macro', 'patient'])
            ->where('slug', $slug)
            ->first();

        if (!$patient_detail) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        if (!$inputCal) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        return view('web.kcal.edit', compact('inputCal', 'patient_detail', 'kcals'));
    }

    public function update(Request $request)
    {
        try {
            InputCalculation::where('patient_id', $request->patient_id)->update([
                'milk_s' => $request->num_MILK_Skimmed,
                'milk_l' => $request->num_MILK_Low_Fat,
                'milk_f' => $request->num_MILK_Full_Fat,
                'vegetable' => $request->num_VEGETABLE,
                'fruit' => $request->num_FRUIT,
                'starch' => $request->num_STARCH,
                'proteins_l' => $request->num_PROTEINS_Lean_Meat,
                'proteins_m' => $request->num_PROTEINS_Medium_Fat,
                'proteins_h' => $request->num_PROTEINS_High_Fat,
                'fat' => $request->num_FAT,
                'halfstlmfat_s' => $request->num_HALFSTLMFAT_Soup,
                'halfstlmfat_a' => $request->num_HALFSTLMFAT_Appetizer,
                'stlmfat_p' => $request->num_STLMFAT_Prepared_Meals,
                'stlmfat_f' => $request->num_STLMFAT_Fast_Food,
                'beverages' => $request->num_BEVERAGES,
                'alcohol' => $request->num_ALCOHOL,
                'cho' => $request->num_CHO,
                'miscellaneous' => $request->num_MISCELLANEOUS,
                'supplements' => $request->num_SUPPLEMENTS,
                'patient_id' => $request->patient_id
            ]);

            return redirect()->route('patient.index')->with("success", "Data update Successfully !!");
        } catch (Exception $e) {

            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again !!');
        }
    }

}
