<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\EmShortlist;
use App\Model\Student\Jobs;
use App\Model\Student\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Student\User;
use DB;
use Redirect;
class ShortlistController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('employer');
    }

    public function store(Request $request)
    {
      $id = $request->shortlisted_for_job_id;
      $uid = $request->user_id;
      $input = $request->all();

      EmShortlist::create($input);

      DB::table('student_applieds')
            ->where('student_applieds.applied_for_job_id', $id)
            ->where('student_applieds.user_id', $uid)
            ->update(['already' => '1']);

      return Redirect::route('whoapplied', $id);
    }

    public function shortlistview($id)
    {
      $shortlisted = DB::table('em_shortlists')
                    ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
                    ->select('em_shortlists.*', 'user_info.fname','user_info.lname')
                    ->where('em_shortlists.shortlisted_for_job_id', $id)
                    ->get();
      $id = auth()->user()->id;
      $shortlistlimit = DB::table('em_shortlists')
              ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
              ->count();
      $jobcount = DB::table('jobs')
                ->select('jobs.*')
                ->where('user_id', $id)
                ->count();
      $limit= $jobcount*5;
    return view('employer.shortlisted', [
        'shortlisted'=>$shortlisted,
        'shortlistlimit' => $shortlistlimit,
        'jobcount' => $jobcount,
        'limit' =>$limit,

        ]);

    }
    public function destroy($id, Request $request)
    {

      $var = EmShortlist::where('em_shortlist_id','=',$id);
      $var->delete();
      $sid = $request->shortlisted_for_job_id;
      $uid = $request->user_id;
      DB::table('student_applieds')
          ->where('student_applieds.applied_for_job_id', $sid)
          ->where('student_applieds.user_id', $uid)
            ->update(['already' => '0']);

      return redirect('/postedjobs');

    }

    public function finalize($id)
    {
      DB::table('em_shortlists')
            ->where('em_shortlists.shortlisted_for_job_id', $id)
            ->update(['finalized' => 1]);


      return Redirect::route('shortlists', $id);
    }

    public function callforinterview()
    {
      $employer = auth()->user();

      if($employer->subs_type===0)
      {
        return view('employer.appointment.paynsetappointment');
      }else
      {
        $call = DB::table('em_shortlists')
            ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
            ->join('em_infos', 'em_shortlists.shortlistedby', '=', 'em_infos.user_id')
            ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
            ->select('user_info.fname', 'user_info.mobile', 'user_info.lname','em_infos.company_name','jobs.job_name')
            ->get();

            return view('employer.appointment.setappointment', [
              'call'=>$call,
            ]);
      }

    }
}
