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

class ShortlistController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('employer');
    }

    public function store(Request $request)
    {

      $input = $request->all();

      EmShortlist::create($input);

      return redirect('/postedjobs');
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
    public function destroy($id)
    {
      $var = EmShortlist::where('em_shortlist_id','=',$id);
      $var->delete();

      return redirect('/postedjobs');

    }

    public function finalize($id)
    {
      DB::table('em_shortlists')
            ->where('em_shortlist_id', $id)
            ->update(['finalized' => 1]);


      return redirect('/postedjobs');
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
