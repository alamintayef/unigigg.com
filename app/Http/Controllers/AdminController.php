<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;
use App\Model\Student\User;
use App\Model\Student\Billing;
use App\Model\Student\FunFacts;
use App\Model\Student\Image;
use App\Model\Student\EmInfo;
use App\Model\Student\Jobs;
use App\Model\Student\University;
use App\Model\Student\Area;
use App\Model\Student\Reference;
use App\Model\Student\Vprofile;
use App\Model\Student\OddJobs;
use DB;
use Mailgun;
use SMSGateway;
use Carbon\Carbon;


class AdminController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware(['auth','employer']);
    }
    public function index()
    {
      $alluser = DB::table('users')->where('type',1)->get();

      return view('admin.user.userboard',[
        'alluser' => $alluser,
      ]);

    }
    public function employer()
    {
      $allemployer = DB::table('users')->where('type',2)->get();

      return view('admin.employerboard',[
        'allemployer' => $allemployer,
      ]);


    }
    public function employerview($id)
    {
      $employer = DB::table('users')
                ->join('em_infos','users.id','=','em_infos.user_id')
                ->select('users.*','em_infos.*')
                ->first();
      $jobsposted = DB::table('jobs')->select('jobs.*')->where('user_id',$employer->id)->get();
        return view('employer.employerview',[
          'employer' => $employer,
          'jobsposted' =>$jobsposted,
        ]);
    }


    // Student Profile view
    public function studentadminview($id)
    {
      $user = User::where('id','=',$id)->first();
      $view = UserInfo::where('user_id','=', $id)->first();
      $skill = Skills::where('user_id','=', $id)->get();
      $education = Education::where('user_id','=', $id)->get();
      $exps = Experience::where('user_id','=', $id)->get();
      $refs = Reference::where('user_id','=', $id)->get();
      $interest = Interest::where('user_id','=', $id)->get();
      $hobby =Hobbies::where('user_id','=', $id)->get();
      $about =FunFacts::where('user_id','=', $id)->get();
      $images = Image::where('user_id','=', $id)->orderBy('created_at', 'desc')->limit(1)->get();
      $vdo =Vprofile::where('user_id','=', $id)->first();
      return view('admin.talentprofile', [
        'view'=>$view,
        'skill'=>$skill,
        'education'=> $education,
        'exps'=> $exps,
        'refs'=> $refs,
        'images'=> $images,
        'user' => $user,
        'interest' => $interest,
        'hobby'=> $hobby,
        'about'=> $about,
        'vdo' => $vdo

      ]);
    }
    public function unistore(Request $request)
    {
      $this->validate($request, [
        'university'=> 'required',
      ]);
    $university = new University;
    $university->university = $request->university;
    $university->save();
    notify()->flash('Added Successfully! Go to Dashboard', 'success', [
       'timer' => 1000,
       'text' => '! Congrats',
     ]);

    return redirect('/home');
    }
    public function getarea()
    {
        $area = Area::all();
        return view('admin.area',['area'=>$area,]);
    }

    public function areastore(Request $request)
    {
      $this->validate($request, [
        'area'=> 'required',
      ]);
    $area = new Area;
    $area->area = $request->area;
    $area->save();
    notify()->flash('Added Successfully! Go to Dashboard', 'success', [
       'timer' => 1000,
       'text' => '! Congrats',
     ]);

    return redirect('/area');
    }
    //SHOW VERIFICATION REQUEST
    public function verification(){

      $varreqs = DB::table('users')
              ->join('billings', 'users.id', '=', 'billings.user_id')
              ->select('users.name','users.id','users.verified','billings.bkash_number','billings.transaction_id')
              ->get();
      return view('admin.verification',[
        'varreqs' => $varreqs,
      ]);

    }

    //VERIFY

    public function verify($id){


      DB::table('users')
                  ->where('id', $id)
                  ->update(['verified' => '1']);

      $verified = DB::table('user_info')->select('user_info.*')->where('user_id',$id)->first();

      $deviceID = '20198';
      $number = $verified->mobile;

      $message = 'Congratulations ! '.$verified->fname.' '.$verified->lname. ' Your profile has been verified successfully, You can now apply to regular jobs. Regards unigigg team ';

      $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);

      notify()->flash('Notified!', 'success', [
        'timer' => 2000,

      ]);
      return redirect('admin')   ;
    }
    //undo verification
    public function undoverify($id)
    {
      DB::table('users')
                  ->where('id', $id)
                  ->update(['verified' => '0']);

                  notify()->flash('Reverted successfully!', 'success', [
                    'timer' => 2000,

                  ]);
          return redirect('verification')   ;
    }

    // Job Cron
    public function managejobs(){

      $jobs = Jobs::where('job_expires','=', Carbon::today())->get();
      return view('admin.jobcron', [
        'jobs'=>$jobs,
      ]);
    }
    public function deletejobs($id)
    {
      $jobs = Jobs::where('job_id','=',$id);

      $jobs->delete();
      notify()->flash('Deleted Successfully!', 'success', [
        'timer' => 2000,

      ]);

      return redirect('/managejobs');
    }
  // Eccentric Job Cron
    public function manageoddjobs(){

      $jobs = OddJobs::where('job_expires','=', Carbon::yesterday())->get();
      return view('admin.eccjobcron', [
        'jobs'=>$jobs,
      ]);
    }
    public function destroy($id)
    {
      $jobs = OddJobs::where('odd_id','=',$id);

      $jobs->delete();


      return redirect('/postedjobs');

  }
    public function adduni()
    {
      return view('admin.adduni');
    }

    public function search(Request $request)
    {
      $this->validate($request, [
        'search'=> 'required',
      ]);
       $search = \Request::get('search');

       $skill = DB::table('education')
              ->join('users', 'education.user_id', '=','users.id')
              ->select('education.*','users.*')
              ->where('Degree_result','>=',$search)
              ->get();


      return view('admin.search.search',[
          'skill'=> $skill,
        ]);
    }
    public function ShowInterviewRequest()
    {

      $interviewcall = DB:: table('call_for_interviews')
                    ->join('em_infos', 'call_for_interviews.user_id', '=', 'em_infos.user_id')
                    ->join('jobs', 'call_for_interviews.job_id', '=', 'jobs.job_id')

                    ->select('em_infos.*','jobs.*','call_for_interviews.*')
                    ->get();

          /*
            $deviceID = '20198';
          foreach ($call as $calls) {

            $number = $calls->mobile;

            $message = 'You have been called for an interview for '.$calls->job_name.' by '.$calls->company_name. '';
          }


          $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);
          */
          return view('admin.c4in', [
            'interviewcall' => $interviewcall,
          ]);
    }

    public function callallforinterview($id)
    {
      DB::table('jobs')
                  ->where('job_id', $id)
                  ->update(['paid' => '1']);
      $call = DB::table('em_shortlists')
            ->join('call_for_interviews','em_shortlists.shortlisted_for_job_id','=','call_for_interviews.job_id')
            ->join('jobs','em_shortlists.shortlisted_for_job_id','=','jobs.job_id')
            ->join('users','em_shortlists.user_id','=','users.id')
            ->join('user_info','users.id','=','user_info.user_id')
            ->join('em_infos','call_for_interviews.user_id','=','em_infos.user_id')
            ->select('users.email','em_shortlists.shortlisted_for_job_id','jobs.job_name','em_infos.company_name','em_infos.company_phone','user_info.fname','user_info.lname','user_info.mobile','call_for_interviews.appointment','jobs.paid')
            ->where('em_shortlists.shortlisted_for_job_id','=',$id)
            ->get();
          foreach ($call as $calls)
          {

            Mailgun::send('email.admin.callforinterviewbyadmin',[ 'calls' =>  $calls ], function ($m) use ($calls)
            {
              $m->from('callforinterview@unigigg.com', 'Congrats ! You have been selected for and Interview');
              $m->to($calls->email)->subject('Call for interview');
            });
          }
          foreach ($call as $calls)
          {

            $deviceID = '20198';


            $number = $calls->mobile;

            $message = 'You have been called for an interview for '.$calls->job_name.' by '.$calls->company_name. 'please check your mail. unigigg.com';
              }
            $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);


          $employer = DB::table('jobs')
                      ->join('users', 'jobs.user_id','=','users.id')
                      ->join('em_infos','users.id', '=', 'em_infos.user_id')
                      ->select('jobs.job_name', 'users.email', 'em_infos.company_name')
                      ->where('jobs.job_id',$id)->first();

                      Mailgun::send('email.admin.callrequestok',[ 'employer' =>  $employer ], function ($m) use ($employer)
                      {
                        $m->from('callforinterview@unigigg.com', 'Congrats ! Your request has been processed successfully');
                        $m->to($employer->email)->subject('Your Request has been processed');
                      });


                                notify()->flash('Notified!', 'success', [
                                  'timer' => 2000,

                                ]);

      return redirect('call/for/in');
    }
}
