<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Department;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('employees.create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->position = $request->input('position');
        $employee->department_id = $request->input('department_id');
        $employee->hiring_date = $request->input('hiring_date');
        $employee->salary = $request->input('salary');

        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $departments = Department::all();
        return view('employees.edit', ['employee' => $employee, 'departments' => $departments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->position = $request->input('position');
        $employee->department_id = $request->input('department_id');
        $employee->hiring_date = $request->input('hiring_date');
        $employee->salary = $request->input('salary');

        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('status', 'Employee deleted successfully');
    }
}
