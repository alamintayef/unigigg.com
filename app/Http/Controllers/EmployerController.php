<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Jobs;
use App\Model\Student\Area;

use App\Model\Student\StudentApplied;
use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Reference;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;
use App\Model\Student\User;
use App\Model\Student\FunFacts;
use App\Model\Student\Image;
use App\Model\Student\EmInfo;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Mailgun;
use SMSGateway;
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
      $area  = Area::all();
      $postedjobs = Jobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
      $uid= auth()->user()->id;
      $postable=DB::table('em_infos')
                  ->where('em_infos.user_id' ,'=',$uid)
                  ->select('em_info.*')
                  ->count();

      return view('employer.postjob', [
        'postedjobs'=>$postedjobs,
        'postable' => $postable,
        'area' =>$area,

      ]);


    }

    // Call All Shorlisted Candidates one by one
    public function callforinterview($id)
    {
      $calls = DB::table('em_shortlists')
          ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
          ->join('users', 'em_shortlists.user_id','=','users.id')
          ->join('em_infos', 'em_shortlists.shortlistedby', '=', 'em_infos.user_id')
          ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
          ->select('user_info.fname', 'user_info.mobile', 'user_info.lname','em_infos.company_name','jobs.job_name','users.email','em_infos.company_phone')
          ->where('em_shortlists.em_shortlist_id', $id)
          ->first();

          DB::table('em_shortlists')
                      ->where('em_shortlist_id', $id)
                      ->update(['called' => '1']);

          Mailgun::send('email.regular', ['calls' => $calls], function ($m) use ($calls) {
              $m->from('call@unigigg.com', 'Interview call from unigigg');

              $m->to($calls->email)->subject('Congrats!');
          });

          //SMS
            $deviceID = '20198';
            $number = $calls->mobile;
            $message = 'You have been called for an interview for '.$calls->job_name.' by '.$calls->company_name. ' please check your mail. unigigg.com';
            $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);

          return redirect('home');

    }

    // Call All Shorlisted Candidates

    public function callforinterviewall($id)
    {
      $call = DB::table('em_shortlists')
          ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
          ->join('users', 'em_shortlists.user_id','=','users.id')
          ->join('em_infos', 'em_shortlists.shortlistedby', '=', 'em_infos.user_id')
          ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
          ->select('user_info.fname','user_info.lname', 'user_info.mobile', 'user_info.lname','em_infos.company_name','jobs.job_name','users.email','em_infos.company_phone')
          ->where('em_shortlists.shortlisted_for_job_id', $id)
          ->get();

          DB::table('em_shortlists')
                      ->where('shortlisted_for_job_id', $id)
                      ->update(['called' => '1']);



          foreach ($call as $calls)
          {
              Mailgun::send('email.regular', ['calls' => $calls], function ($m) use ($calls) {
                  $m->from('call@unigigg.com', 'Interview call from unigigg');

                  $m->to($calls->email)->subject('Congrats!');
              });
          }
          // SMS
          foreach ($call as $calls)
          {

            $deviceID = '20198';


            $number = $calls->mobile;

            $message = 'You have been called for an interview for '.$calls->job_name.' by '.$calls->company_name. 'please check your mail. -unigigg.com';
              }
            $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);

          return redirect('home');

    }

    public function studentemview($id)
    {
      $user = User::where('id','=',$id)->get();
      $profile = UserInfo::where('user_id','=', $id)->get();
      $skill = Skills::where('user_id','=', $id)->get();
      $education = Education::where('user_id','=', $id)->get();
      $exps = Experience::where('user_id','=', $id)->get();
      $refs = Reference::where('user_id','=', $id)->get();
      $images = Image::where('user_id','=', $id)->orderBy('created_at', 'desc')->limit(1)->get();
      return view('student.studentviewpaid', [
        'profile'=>$profile,
        'skill'=>$skill,
        'education'=> $education,
        'exps'=> $exps,
        'refs'=> $refs,
        'images'=> $images,
        'user' => $user,



      ]);


    }


}
