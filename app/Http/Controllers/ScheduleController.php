<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleRequest;
use App\Models\Patient;
use App\Models\Schedule;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $today =  date('Y-m-d H:i:s', strtotime(Carbon::today()));
        $tomorrow = date('Y-m-d H:i:s', strtotime('+1 days', strtotime($today)));

        $patients = Patient::get();
        $schedules = Schedule::where('user_id', Auth::user()->id)->orderBy('start_time', 'asc')->get();
        $daySchedules = Schedule::with('patient')->where('user_id', Auth::user()->id)
            ->where('start_time', '>=', $today)->where('finish_time', '<', $tomorrow)
            ->orderBy('start_time', 'asc')->get();


        return view(
            'web.schedule.index',
            compact('schedules', 'daySchedules', 'patients')
        );
    }

    public function store(ScheduleRequest $request)
    {
        try {
            Schedule::create([
                'title' => $request->title,
                'start_time' => $request->start_time,
                'finish_time' => $request->end_time,
                'color' => $request->color,
                'description' => $request->description,
                'slug' => $request->title,
                'patient_id' => $request->patient_id,
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->back()->with("success", "( " . $request->title . " ) Schedule Added Successfully !!");
        } catch (Exception $e) {
            return $e;
            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        }
    }

    public function edit($slug)
    {
        $patients = Patient::get();
        $schedule = Schedule::with('patient')->where('slug', $slug)
            ->first();
        if (!$schedule) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');

        return view('web.schedule.edit', compact('schedule','patients'));
    }

    public function update(ScheduleRequest $request)
    {
        $schedule = Schedule::where('slug', $request->slug)
            ->first();
        if (!$schedule) return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        try {
            $schedule->update([
                'title' => $request->title,
                'start_time' => $request->start_time,
                'finish_time' => $request->end_time,
                'color' => $request->color,
                'description' => $request->description,
                'slug' => $request->title,
                'patient_id' => $request->patient_id,
                'user_id' => Auth::user()->id,
            ]);

            return redirect()->route('schedule.index')->with("success", "( " . $request->title . " ) Schedule Update Successfully !!");
        } catch (Exception $e) {
            // return $e;
            return redirect()->back()->with('wrong', 'Sorry, Something is wrong please try again!!');
        }
    }
}
