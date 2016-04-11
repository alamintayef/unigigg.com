<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Jobs;
use App\Model\Student\Area;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Mail;
class EmployerController extends Controller
{
    //
    public function index()
    {

      return view('home');
    }


    public function register()
    {
      return view('employer.auth.register');
    }
    public function postjobs(Request $request)
    {

      $postedjobs = Jobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
      $uid= auth()->user()->id;
      $postable=DB::table('em_infos')
                  ->where('em_infos.user_id' ,'=',$uid)
                  ->select('em_info.*')
                  ->count();

      return view('employer.postjob', [
        'postedjobs'=>$postedjobs,
        'postable' => $postable,
      
      ]);


    }

    public function callforinterview($id)
    {
      $call = DB::table('em_shortlists')
          ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
          ->join('users', 'em_shortlists.user_id','=','users.id')
          ->join('em_infos', 'em_shortlists.shortlistedby', '=', 'em_infos.user_id')
          ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
          ->select('user_info.fname', 'user_info.mobile', 'user_info.lname','em_infos.company_name','jobs.job_name','users.email')
          ->where('em_shortlists.shortlisted_for_job_id', $id)
          ->where('finalized',1)
          ->get();


          foreach ($call as $calls) {
          Mail::send('email.interview', ['call' => $calls], function ($m) use ($calls) {
              $m->from('call@unigigg.com', 'Interview call from unigigg');

              $m->to($calls->email)->subject('Congrats!');
          });
        }
          /*
          $deviceID = '20198';
          foreach ($call as $calls) {

            $number = $calls->mobile;

            $message = 'You have been called for an interview for '.$calls->job_name.' by '.$calls->company_name. '';
          }


          $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);
          */
          return redirect('home');

    }


}
