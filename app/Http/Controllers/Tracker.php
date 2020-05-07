<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
use Auth;
use App\Trackermaster;
use App\CompanyMaster;

class Tracker extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //$userid=User::findOrFail($id);
      $id = Auth::id();
      $trackerData=Trackermaster::where('user_id','=',$id)->orderBy('id','desc')->paginate(4);
        return view('AariaData.user.Userview',compact('trackerData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();
        $comp_name=CompanyMaster::where('user_id', '=', $id)->orderBy('id', 'desc')->get();
        return view('AariaData.user.enterData',compact('comp_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->input('Interested');
      $data = implode(',', $data);
      $input=$request->except('Interested');
      $input['Interested']=$data;
      //$input=$request->all();
      $user=Auth::user();
      $user->trackermasters();
      $user->trackermasters()->create($input);
Session::flash('Data_Submit','A new User data Got Is Submitted');
return redirect('/trackerSubmit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($comp_name)
    {

        $trackerData=Trackermaster::findOrFail($comp_name);
        //$trackerData=Trackermaster::findOrFail($comp_name);
        // return view('AariaData.secondAdd',compact('trackerData'));
        return view('AariaData.user.hotelWise',compact('trackerData'));
    }

    // public function showCompName(){
    //   $trackerData=Trackermaster::all();
    //   return view('AariaData.secondAdd',compact('trackerData'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $trackerData=Trackermaster::findOrFail($id);

      return view('AariaData.user.updatedata',compact('trackerData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $trackerData=Trackermaster::findOrFail($id);
      $trackerData->update($request->all());
      Session::flash('Data_Submit','A new User data Got Updated');
      return redirect('/trackerSubmit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
