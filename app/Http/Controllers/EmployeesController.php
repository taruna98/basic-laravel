<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        // dd($employee);
        return view('employee.index', ['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $employee = new Employee;
        // $employee->name = $request->name;
        // $employee->nrp = $request->nrp;
        // $employee->email = $request->email;
        // $employee->company = $request->company;
        // $employee->division = $request->division;
        // $employee->position = $request->position;

        // $employee->save();

        // Employee::create([
        //     'name' => $request->name,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'company' => $request->company,
        //     'division' => $request->division,
        //     'position' => $request->position,
        // ]);
        $request->validate([
            'name' => 'required',
            'nrp' => 'required|size:7',
            'email' => 'required',
            'company' => 'required',
            'division' => 'required',
            'position' => 'required'
        ]);


        Employee::create($request->all());

        return redirect('/employee')->with('status', 'Data has been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee/detail', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'nrp' => 'required|size:7',
            'email' => 'required',
            'company' => 'required',
            'division' => 'required'
        ]);

        Employee::where('id', $employee->id)
            ->update([
                'name' => $request->name,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'company' => $request->company,
                'division' => $request->division,
                'position' => $request->position
            ]);
        // return dd($employee);
        return redirect('/employee')->with('status', 'Data has been Changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        // return dd($employee->id);
        return redirect('/employee')->with('status', 'Data has been Deleted!');
    }
}
