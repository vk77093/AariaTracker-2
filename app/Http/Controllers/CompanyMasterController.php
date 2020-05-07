<?php

namespace App\Http\Controllers;

use App\CompanyMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Auth;


class CompanyMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id=Auth::id();
      $compData=CompanyMaster::where('user_id','=',$id)->get();
        return view('AariaData.user.companyView',compact('compData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AariaData.user.company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$compData=$request->all();
$user=Auth::user();
$user->compmaster();
$user->compmaster()->create($compData);
Session::flash('Data_Submit','A new User data Got Is Submitted');
return redirect('/comp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CompanyMaster  $companyMaster
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyMaster $companyMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CompanyMaster  $companyMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyMaster $companyMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CompanyMaster  $companyMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanyMaster $companyMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CompanyMaster  $companyMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyMaster $companyMaster)
    {
        //
    }
}
