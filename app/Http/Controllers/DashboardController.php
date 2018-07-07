<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;

class DashboardController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title     = 'Dashboard';
        $company_count  = Company::count();
        $employee_count = Employee::count();

        return view('dashboard.dashboard',compact('page_title', 'company_count','employee_count'));
    } 
}
