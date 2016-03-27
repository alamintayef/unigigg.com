<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Jobs;
use App\Model\Student\User;
use App\Model\Student\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class JobsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('employer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'job_name' => 'required|max:255',
            'job_type' => 'required',
            'job_salary' => 'required|min:4|max:12',
            'job_location' => 'required',
            'job_description' => 'required',
            'job_reqs' => 'required',
            'job_reqs_additional' => 'required',
            'job_start_date' => 'required|date',
            'job_last_date_application' => 'required|date',

        ]);

        $request->user()->jobs()->create([
            'job_name' => $request->job_name,
            'job_type' => $request->job_type,
            'job_salary' => $request->job_salary,
            'job_location' => $request->job_location,
            'job_description' => $request->job_description,
            'job_reqs' => $request->job_reqs,
            'job_reqs_additional' => $request->job_reqs_additional,
            'job_start_date' => $request->job_start_date,
            'job_last_date_application' => $request->job_last_date_application,


        ]);
        notify()->flash('Added Successfully! Check Posted Jobs', 'success', [
           'timer' => 3000,
           'text' => 'It\'s really great to see you again',
         ]);

         return redirect('/postjobs');


    }
    public function show(Request $request)
    {
      $postedjobs = Jobs::where('user_id', $request->user()->id)->get();
      return view('employer.postedjobs', [
        'postedjobs'=>$postedjobs,
      ]);
    }
    public function jobboard(Request $request)
    {

      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderBy('created_at', 'desc')
            ->get();

      return view('jobs', [
        'jobs'=>$jobs,

      ]);
    }


    public function destroy($id)
    {
      $jobs = Jobs::where('job_id','=',$id);

      $jobs->delete();


      return redirect('/postedjobs');

  }
  public function oddwhoapplied()
  {

    $applied = DB::table('odd_applieds')
    ->join('user_info', 'odd_applieds.user_id', '=', 'user_info.user_id')
    ->join('odd_jobs', 'odd_applieds.applied_for_odd_id', '=', 'odd_jobs.odd_id')
    ->select('odd_applieds.*', 'user_info.*','odd_jobs.odd_id', 'odd_jobs.title','odd_jobs.user_id')
    ->get();


    return view('jobs.oddappliedem', [
      'applied'=>$applied,

    ]);
  }

}