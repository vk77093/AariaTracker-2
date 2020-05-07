<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\VisitUpdate;
use App\Trackermaster;
use Illuminate\Support\Facades\Session;


class SecondTrackerMaster extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$AlltrackerData=Trackermaster::orderBy('id','desc')->get();
return view('AariaData.admin.view',compact('AlltrackerData'));
       //$id = Auth::id();
      // $trackerData=Trackermaster::where('user_id','=',$id)->orderBy('id','desc')->get();
      // $secondTrackerData=VisitUpdate::orderBy('id','desc')->get();
      // $secondTrackerData=VisitUpdate::orderBy('id','desc')->get();
      // return view('AariaData.secondView',compact('secondTrackerData'));

    }
    public function datatable(){
      $AlltrackerData=Trackermaster::all();
      return view('AariaData.admin.dataTableExample',compact('AlltrackerData'));
    }
    public function alluserWise(){

    }
    public function userDataFetch(){
      $userData=User::all();
      return view('AariaData.admin.viewUser',compact('userData'));
    }

    public function sortForm(){
      $user=User::all();
      $trackerData=Trackermaster::all();
      $allUser=$user->pluck('name','id');
      $state=$user->pluck('cityregion')->unique();
      $hotel=$trackerData->pluck('comp_name')->unique();

      return view('AariaData.admin.sortview',compact('allUser','state','hotel'));
    }

    public function sortFormSearch(Request $request){
      $user=User::all();
      $userName=$request->input('name','state');
      if($userName){
        $user->where('name','LIKE','%'.$userName)->all();
          return view('AariaData.admin.sortviewTest',compact('userName','user'));
      }

      else{
        $message="No data Found";
        return view('AariaData.admin.sortviewTest',compact('message'));
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user=User::all();
      $allUser=$user->pluck('id','name');

      return view('AariaData.admin.sortview',compact('allUser'));
          //return view('AariaData.VisitUpdate');
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
      Session::flash('Data_Submit2','A new User data Got Is Submitted');
      return redirect('/trackerSecond');

      // $input=$request->all();
      //   $user=Auth::user();
      //   $user->visit_updates();
      //   $user->visit_updates()->create($input);

      // $trackerData=new Tracker();
      // $trackerData=$request['user_id'];
      // $trackerData=$request['comp_name'];
      // $input=$request->all();
      // $visitData=new Trackermaster();
      // $visitData->visit_updates();
      // $visitData->visit_updates()->create($visitData);
      //VisitUpdate::create($request->all());
      // $data=$request->input('trackermasters_id');
      // $data1=$request->input('comp_name');
      // $data2->$request->input('address');
      // $input['trackermasters_id']=$data;
      // $input['comp_name']=$data1;
      // $input['address']=$data2;

// $input=$request->all();
//       $user=new trackermasters();
//        $user->visit_updates();
//        $user->visit_updates()->create($input);

// VisitUpdate::create($request->all());
// Session::flash('Data_Submit','A new User data Got Is Submitted');
//         return redirect('/trackerSecond');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

      $user=User::all();
      $trackerData=Trackermaster::all();


      return view('AariaData.admin.allSortedGet',compact('trackerData'));

      //added code of search
    //   $query=User::query();
    //   if(request('id')){
    //     $quer->where('id',request('id'));
    //   }
    //   $userData=$query->get();
    // return view('AariaData.admin.allSortedGet',compact('userData'));
    }



    public function myview(Request $request, $id){
      // $AlltrackerData=Trackermaster::findOrFail($id);
      // $AlltrackerData->get($request->all());
      // return view('admin.allSortedGet');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $trackerData=Trackermaster::all();
      $AlltrackerData=Trackermaster::findOrFail($id);
      // $AlltrackerData=Trackermaster::findOrFail([$id,$comp_name]);




      return view('AariaData.admin.updateTable',compact('AlltrackerData','trackerData'));
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
      $AlltrackerData=Trackermaster::findOrFail($id);
      $AlltrackerData->update($request->all());
      Session::flash('Data_Submit2','A new User data Got Updated');
      return redirect('/trackerSecond');
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
    public function search(Request $request){
      $query=User::query();
      if(request('id')){
        $query->where('id',request('id'));
      }
      $userData=$query->get();
    return view('AariaData.admin.viewUser',compact('userData'));
    }
}
