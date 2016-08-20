<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Model\Student\StudentApplied;
use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;
use App\Model\Student\Reference;
use App\Model\Student\Image;
use App\Model\Student\User;
use App\Model\Student\Jobs;
use Mailgun;
use Session;
use Slack;
class ChakriController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request)
    {

      $input = $request->all();

      $uid=$request->user_id;
      $job_id=$request->applied_for_job_id;
      $user= DB::table('users')
            ->where('users.id','=',$uid)
            ->join('user_info','users.id','=','user_info.user_id')
            ->select('users.*','user_info.*')
            ->first();


      /*employer
      $employer_mail=DB::table('jobs')->where('job_id','=',$job_id)->select('jobs.user_id')->first();
      $employer = DB::table('users')
                        ->where('users.id','=',$employer_mail->user_id)
                      //  ->join('jobs','users.id','=','jobs.user_id')
                        ->select('users.*')
                        ->first();
      Mailgun::send('email.notify.notifyemployer',[ 'employer' =>  $employer ], function ($m) use ($employer)
      {
        $m->from('application@unigigg.com', 'New Job Application Submitted');
        $m->to('sarkeralaminnsu@gmail.com')->subject('New candidate applied for');
      });

      //admin
     Mailgun::send('email.notify.applicationNotification',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('info@unigigg.com', 'New Job Application Submitted');
        $m->to('tayef@unigigg.com')->subject('New Job Application Submitted');
      });
      */
      $this->NotifyAdmin($uid,$job_id);
      Mailgun::send('email.notify.applicationNotification',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('info@unigigg.com', 'Thank you for applying');
        $m->to($user->email)->subject('Hi ! Thank you for Applying');
      });



    //  $this->mailApplicant($uid);


      StudentApplied::create($input);

      $this->mailEmployer($job_id, $uid);

      notify()->flash('Thank You For Applying !', 'success', [
        'timer' => 2000,

      ]);




      return redirect('/home');
    }

    private function mailEmployer($id, $uid)
    {
      $employer_mail=DB::table('jobs')->where('id','=',$id)->select('jobs.user_id')->first();
      $userid= $employer_mail->user_id;
      $employer = DB::table('em_infos')
                        ->where('em_infos.user_id','=',$userid)
                        ->join('users','users.id','=','em_infos.user_id')
                        ->join('jobs','users.id','=','jobs.user_id')
                        ->select('em_infos.company_name','users.email','jobs.job_name')
                        ->first();
      $user = DB::table('users')->where('id',$uid)->select('users.*')->first();
      $data = array('company_name' => $employer->company_name,'email'=> $employer->email,'jname'=>$employer->job_name,'name'=> $user->name);
      Mailgun::send('email.notify.notifyemployer',[ 'data' =>  $data ], function ($m) use ($data)
      {
        $m->from('application@unigigg.com', 'New Job Application Submitted');
        $m->to($data['email'])->subject('New candidate applied');
      });
    }

    private function mailApplicant($uid){

      $user= DB::table('users')
            ->where('users.id','=',$uid)
            ->join('user_info','users.id','=','user_info.user_id')
            ->select('users.*','user_info.*')
            ->first();
            Mailgun::send('email.notify.applicationNotification',[ 'user' =>  $user ], function ($m) use ($user)
            {
              $m->from('info@unigigg.com', 'Thank you for applying');
              $m->to($user->email)->subject('Hi ! Thank you for Applying');
            });

    }

    private function NotifyAdmin($uid,$jobId)
    {
      $user= DB::table('users')
            ->where('users.id','=',$uid)
            ->join('user_info','users.id','=','user_info.user_id')
            ->select('user_info.fname','user_info.lname')
            ->first();
      $job= DB::table('jobs')->where('id','=',$jobId)->select('jobs.job_name')->first();
      Slack::send(''.$user->fname.' '.$user->lname.' has applied to '.$job->job_name.' ');
      /*$info = array('fname'=> $user->fname,'lname'=> $user->lname, 'job_name'=> $job->job_name);
      Mailgun::send('email.notify.notifyAdminJobs',['info' => $info] , function ($m) use ($info)
        {
          $m->from('info@unigigg.com',' '.$info['fname'].' applied for the post '.$info['job_name'].'');
          $m->to('sarkeralaminnsu@gmail.com')->subject('New Job Application Submitted');
        });
        */

    }



    public function chakriboard(Request $request)
    {
      $id = auth()->user()->id;

      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->where('jobs.status','=','1')
            ->orderBy('created_at', 'desc')
            ->get();


      return view('chakri', [
        'jobs'=>$jobs,




      ]);
    }
    public function chakrisearch()
    {
      $search = \Request::get('search');
      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->where('jobs.job_name','like','%'.$search.'%')
            ->orWhere('jobs.job_location','like','%'.$search.'%')
            ->orderBy('created_at', 'desc')
            ->get();

            return view('chakri.regularchakri.chakrisearch',[
              'jobs'=>$jobs
            ]);

    }

    public function internships(Request $request)
    {
        $jobs=  DB::table('jobs')
               ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
               ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
               ->where('job_type', 'internship')
               ->where('status', 1)
               ->orderBy('created_at', 'desc')
               ->get();

               return view('chakri.internship', [
           'jobs'=>$jobs,

         ]);
    }
    public function fulltime(Request $request)
    {
        $jobs=  DB::table('jobs')
               ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
               ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
               ->where('job_type', 'fulltime')
               ->where('status', 1)
               ->orderBy('created_at', 'desc')
               ->get();

               return view('chakri.fulltime', [
           'jobs'=>$jobs,

         ]);
    }
    public function parttime(Request $request)
    {
        $jobs=  DB::table('jobs')
               ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
               ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
               ->where('job_type', 'parttime')
               ->where('status', 1)
               ->orderBy('created_at', 'desc')
               ->get();

               return view('chakri.parttime', [
           'jobs'=>$jobs,

         ]);
    }
    public function onetime(Request $request)
    {
        $jobs=  DB::table('jobs')
               ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
               ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
               ->where('job_type', 'onetime')
               ->where('status', 1)
               ->orderBy('created_at', 'desc')
               ->get();

               return view('chakri.onetime', [
           'jobs'=>$jobs,

         ]);
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
      return view('student.studentemview', [
        'profile'=>$profile,
        'skill'=>$skill,
        'education'=> $education,
        'exps'=> $exps,
        'refs'=> $refs,
        'images'=> $images,
        'user' => $user,



      ]);
    }
    public function showjobs($id)
    {
      $job = DB::table('jobs')
            ->where('jobs.id','=', $id)
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderBy('created_at', 'desc')
            ->first();


      $uid=auth()->user()->id;

      $applicable=DB::table('user_info')
                  ->where('user_info.user_id' ,'=',$uid)
                  ->join('skills', 'user_info.user_id','=','skills.user_id')
                  ->join('education', 'education.user_id','=','skills.user_id')
                  ->select('user_info.*','skills.*','education.*')
                  ->get();

      $reqMatch = DB::table('education')
                  ->select('education.Degree_result')
                  ->where('user_id','=', $uid)->first();
            return view('jobs.chakriview', [
              'job'=>$job,
              'applicable'=>$applicable,
              'reqMatch' => $reqMatch,



            ]);
    }


}
