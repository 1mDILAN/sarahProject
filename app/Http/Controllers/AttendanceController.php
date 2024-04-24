<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Employee;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index', ['attendances' => $attendances]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('attendances.create', ['employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attendance = new Attendance();
        $attendance->employee_id = $request->input('employee_id');
        $attendance->date = $request->input('date');
        $attendance->clock_in_time = $request->input('clock_in_time');
        $attendance->departure_time = $request->input('departure_time');

        $attendance->save();

        return redirect()->route('attendances.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        return view('attendances.show', ['attendance' => $attendance]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        $employees = Employee::all();
        return view('attendances.edit', ['attendance' => $attendance], ['employees' => $employees]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        $attendance->employee_id = $request->input('employee_id');
        $attendance->date = $request->input('date');
        $attendance->clock_in_time = $request->input('clock_in_time');
        $attendance->departure_time = $request->input('departure_time');

        $attendance->save();

        return redirect()->route('attendances.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendances.index')->with('status', 'Attendance deleted successfully');
    }
}
