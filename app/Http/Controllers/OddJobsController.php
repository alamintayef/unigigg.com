<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\OddJobs;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OddJobsController extends Controller
{
      //
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function index(){

        $oddjobs = OddJobs::all();

        return view('jobs.oddjobs',[
          'oddjobs'=> $oddjobs,
        ]);

      }
      public function postjobs()
      {
        return view('jobs.postoddjobs');
      }
      public function empostjobs()
      {
        return view('jobs.empostoddjobs');
      }
      public function postjob(Request $request)
      {
        $this->validate($request, [
          'title'         => 'required|min:3|max:255',
          'type'          => 'required',
          'description'   => 'required',
          'offering'      => 'required',
          'area'          => 'required',
          'university'    => 'min:5|max:50',


        ]);

        $request->user()->oddjobs()->create([
          'title'=> $request->title,
          'type' => $request->type,
          'description' => $request->description,
          'offering' => $request->offering,
          'area' => $request->area,
          'university' => $request->university,

        ]);

        return redirect('/home');

      }
      public function whoapplied()
      {

        $applied = DB::table('odd_applieds')
        ->join('user_info', 'odd_applieds.user_id', '=', 'user_info.user_id')
        ->join('odd_jobs', 'odd_applieds.applied_for_odd_id', '=', 'odd_jobs.odd_id')
        ->select('odd_applieds.*', 'user_info.*','odd_jobs.odd_id', 'odd_jobs.title','odd_jobs.user_id')
        ->get();


        return view('jobs.oddapplied', [
          'applied'=>$applied,

        ]);
      }
      public function oddwhereiapplied()
      {
        $applied = DB::table('odd_applieds')
        ->join('odd_jobs', 'odd_applieds.applied_for_odd_id', '=', 'odd_jobs.odd_id')
        ->join('users', 'odd_jobs.user_id','=','users.id')
        ->select('odd_applieds.*','odd_jobs.title','odd_jobs.odd_id', 'users.name')
        ->get();


        return view('student.oddwhereiapplied', [
          'applied'=>$applied,
        ]);

      }
}