<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Activity;
use App\Models\AgeRange;
use App\Models\Allergen;
use App\Models\DietType;
use App\Models\MacroDistribution;
use App\Models\Patient;
use App\Models\PatientDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

    public function ageRange($id)
    {
        $ageRanges = AgeRange::where('diet_type_id', $id)->get();
        $output = '';
        $output = '<option disabled selected value="">Select Age Range</option>';
        foreach ($ageRanges as $item) {
            $output .= '
            <option value="' . $item->id . '">
                ' . $item->name . '
            </option>';
        };
        return  $output;
    }

    public function index()
    {
        $patients  = Patient::with('inputCalc')->orderBy('id','DESC')->get();

        return view(
            'web.patient.index',
            compact('patients')
        );
    }

    public function create()
    {
        $macros = MacroDistribution::get();
        $allergans = Allergen::get();
        $activities = Activity::get();
        $dietTypes = DietType::get();

        return view(
            'web.patient.details',
            compact([
                'macros',
                'allergans',
                'activities',
                'dietTypes'
            ])
        );
    }

    public function store(PatientRequest $request)
    {
        //validation done
        try {
            DB::beginTransaction();
            $patient =  Patient::create([
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'birthday' => $request->birthday,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'gender' => $request->gender,
            ]);

            PatientDetail::create([
                'height' => $request->height,
                'weight' => $request->weight,
                'activity_value' => $request->activity,
                'bmr' => $request->bmr,
                'tde' => $request->tde,
                'goal' => $request->goal,
                'start_goal' => $request->start_goal,
                'ideal_goal' => $request->ideal_goal,
                'max_goal' => $request->max_goal,
                'macro_distribution_id' => $request->macros,
                'diet_type_id' => $request->diet_type,
                'age_range_id' => $request->age_range,
                'fasting' => $request->fasting,
                'slug' => $patient->first_name,
                'patient_id' => $patient->id,
            ]);

            if ($request->allergans) {
                $patient->allergens()->attach($request->allergans);
            }

            DB::commit();
            return redirect()->route('patient.index')->with("success", "New Patient Details were Added Successfully !!");
        } catch (Exception $e) {
            DB::rollBack();
            return $e;
            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        }
    }
}
