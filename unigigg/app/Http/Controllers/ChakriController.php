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
use Session;
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

      StudentApplied::create($input);

      notify()->flash('Applied Successfully!', 'success', [
        'timer' => 2000,

      ]);


      return redirect('/home');
    }

    public function chakriboard(Request $request)
    {
      $id = auth()->user()->id;

      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
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
            ->where('jobs.job_id','=', $id)
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderBy('created_at', 'desc')
            ->first();


      $uid= auth()->user()->id;

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
