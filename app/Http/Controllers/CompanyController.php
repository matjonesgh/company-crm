<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use DB;
use App\Company;


class CompanyController extends Controller
{

    protected $uploads = 'public';

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
        $page_title = 'Companies';
        //$companies  = DB::table('companies')->paginate(10);
        $companies  = Company::paginate(10);

        return view('company.list', compact('companies','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create',['page_title' => 'Create Company']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {

        $company = Company::create($request->all());
        
        if ($request->hasFile('logo')) {

            $path = $request->file('logo')->store($this->uploads);
            $company->logo = basename($path);
        }

        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Company Details';

        if ($company = Company::find($id)) {

            return view('company.show',compact('page_title','company'));

        } else {

            return redirect()->route('company.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'Edit Company';
        if ($company = Company::find($id)) {

            return view('company.edit',compact('page_title','company'));

        } else {

            return redirect()->route('company.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        if ($company = Company::find($id)) {

            if ($request->hasFile('logo')) {

                // save the new logo
                $new_logo = $request->file('logo')->store($this->uploads);

                //remove the old logo
                if (isset($company->logo)) {

                    if (file_exists($logo = storage_path("app/$this->uploads/$company->logo"))) 
                        unlink($logo);        
                }

                // set the new logo
                $company->logo = basename($new_logo);
            }

            $company->update($request->all());
        }

        return redirect()->route('company.index');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $page_title = 'Delete Company';
        
        if ($company = Company::find($id))
            return view('company.delete', compact('page_title','company'));
        else
            return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($company = Company::find($id)) {

            if (isset($company->logo)) {

                if (file_exists($logo = storage_path("app/$this->uploads/$company->logo"))) 
                    unlink($logo);        
            }
        
            $company->delete();
        }

        return redirect()->route('company.index');
    }
}
