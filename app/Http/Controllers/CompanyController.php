<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companys = Company::latest()->paginate(10);
        return view('companys.index', compact('companys'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
   


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required'
            ]);
            
            Company::create($request->all());
            return redirect()->route('companys.index')
            ->with('success','Company has been created successfully.');
            }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companys.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companys.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Company $company)
    {
    $request->validate([
    'name' => 'required',
    'email' => 'required',
    'website' => 'required',
    ]);
    
    $company->update($request->all());
    
    return redirect()->route('companys.index')
    ->with('success','Company Has Been updated successfully');
    }
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\companies $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Company $company)
    {
        $company->delete();
        
        return redirect()->route('companys.index')
        ->with('success','Company has been deleted successfully');
        }
    
}
