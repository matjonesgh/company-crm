<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use DB;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Employees';
        $employees  = Employee::paginate(10);

        return view('employee.list', compact('employees','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Create Employee';
        $companies  = Company::all(['id', 'name']);

        return view('employee.create', compact('page_title','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $employee = Employee::create($request->all());
        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Employee';
        $companies  = Company::all(['id', 'name']);

        if ($employee = Employee::find($id)) {

            return view('employee.edit',compact('page_title','employee','companies'));

        } else {

            return redirect()->route('employee.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        if ($employee = Employee::find($id)) {

            $employee->update($request->all());
        }

        return redirect()->route('employee.index');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $page_title = 'Delete Employee';
        
        if ($employee = Employee::find($id))
            return view('employee.delete', compact('page_title','employee'));
        else
            return redirect()->route('employee.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($employee = Employee::find($id)) {
        
            $employee->delete();
        }

        return redirect()->route('employee.index');
    }
}
