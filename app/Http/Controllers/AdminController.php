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

      return view('admin.userboard',[
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
    public function studentemview($id)
    {
      $user = User::where('id','=',$id)->get();
      $profile = UserInfo::where('user_id','=', $id)->get();
      $skill = Skills::where('user_id','=', $id)->get();
      $education = Education::where('user_id','=', $id)->get();
      $exps = Experience::where('user_id','=', $id)->get();
      $refs = Reference::where('user_id','=', $id)->get();
      $interest = Interest::where('user_id','=', $id)->get();
      $hobby =Hobbies::where('user_id','=', $id)->get();
      $about =FunFacts::where('user_id','=', $id)->get();
      $images = Image::where('user_id','=', $id)->orderBy('created_at', 'desc')->limit(1)->get();
      $vdo =Vprofile::where('user_id','=', $id)->get();
      return view('admin.talentprofile', [
        'profile'=>$profile,
        'skill'=>$skill,
        'education'=> $education,
        'exps'=> $exps,
        'refs'=> $refs,
        'images'=> $images,
        'user' => $user,
        'interest' => $interest,
        'hobby'=> $hobby,
        'about'=> $about,

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

        return redirect('admin')   ;
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

       $skill = DB::table('skills')
              ->join('users', 'skills.user_id', '=','users.id')
              ->select('skills.*','users.*')
              ->where('skill_name','like','%'.$search.',%','and', 'like','%'.$search.'%')
              ->get();


      return view('admin.search.search',[
          'skill'=> $skill,
        ]);
    }
    public function callforinterview()
    {
      $call = DB::table('em_shortlists')
          ->join('user_info', 'em_shortlists.user_id', '=', 'user_info.user_id')
          ->join('em_infos', 'em_shortlists.shortlistedby', '=', 'em_infos.user_id')
          ->join('jobs', 'em_shortlists.shortlisted_for_job_id', '=', 'jobs.job_id')
          ->select('user_info.fname', 'user_info.mobile', 'user_info.lname','em_infos.company_name','jobs.job_name')
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
            'call' => $call,
          ]);
    }
}
