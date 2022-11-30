<?php

namespace App\Http\Controllers;

use App\Models\InputCalculation;
use App\Models\Kcal;
use App\Models\Patient;
use Illuminate\Http\Request;

class PortionController extends Controller
{
    public function portion($slug)
    {
        $patient  = Patient::get();
        $kcals = Kcal::get();
        $InputCal = InputCalculation::where('slug', $slug)
            ->first();
        if (!$InputCal) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        return view('web.kcal.portion', compact('patient', 'InputCal', 'kcals'));
    }
}
