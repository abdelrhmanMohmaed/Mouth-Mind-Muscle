<?php

namespace App\Http\Controllers;

use App\Http\Requests\MacroRequest;
use App\Models\MacroDistribution;
use Exception;
use Illuminate\Http\Request;

class MacroController extends Controller
{
    public function index()
    {
        $macros = MacroDistribution::get();

        return view('web.macro.index', compact('macros'));
    }

    public function store(MacroRequest $request)
    {
        try {
            MacroDistribution::create([
                'name' => $request->name,

                'min_cho' => $request->min_cho,
                'ideal_cho' => $request->ideal_cho,
                'max_cho' => $request->max_cho,

                'min_protien' => $request->min_protien,
                'ideal_protien' => $request->ideal_protien,
                'max_protien' => $request->max_protien,

                'min_fat' => $request->min_fat,
                'ideal_fat' => $request->ideal_fat,
                'max_fat' => $request->max_fat,
            ]);

            return redirect()->back()->with("success", "( " . $request->name . " ) Macro Added Successfully !!");
        } catch (Exception $e) {
            // return $e;
            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        }
    }

    public function update(MacroRequest $request)
    {
        $macro = MacroDistribution::find($request->id);
        if (!$macro) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        try {
            $macro->update([
                'name' => $request->name,

                'min_cho' => $request->min_cho,
                'ideal_cho' => $request->ideal_cho,
                'max_cho' => $request->max_cho,

                'min_protien' => $request->min_protien,
                'ideal_protien' => $request->ideal_protien,
                'max_protien' => $request->max_protien,

                'min_fat' => $request->min_fat,
                'ideal_fat' => $request->ideal_fat,
                'max_fat' => $request->max_fat,
            ]);
            return redirect()->back()->with("success", "Macro ( " . $request->name . " ) Updated Successfully !!");
        } catch (Exception $e) {
            // return $e;
            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        }
    }

    public function delete(Request $request)
    {
        $macro = MacroDistribution::find($request->macro_id);
        if (!$macro) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        try {
            $macro->delete();

            return redirect()->back()->with("success", "Macro ( " . $macro->name . " ) Deleted Successfully !!");
        } catch (Exception $e) {

            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again(Please check this macro not related Patient)!!');
        }
    }
}
