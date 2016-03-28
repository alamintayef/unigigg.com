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

      return redirect('/home');
    }

    public function chakriboard(Request $request)
    {

      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderBy('created_at', 'desc')
            ->get();
      $applied = DB::table('student_applieds')
              ->select('student_applieds.*')
              ->get();

      return view('chakri', [
        'jobs'=>$jobs,
        'applied'=> $applied,

      ]);
    }
    public function studentemview($id)
    {
      $profile = UserInfo::where('user_id','=', $id)->get();
      $skill = Skills::where('user_id','=', $id)->get();
      $education = Education::where('user_id','=', $id)->get();
      return view('student.studentemview', [
        'profile'=>$profile,
        'skill'=>$skill,
        'education'=> $education,


      ]);
    }
    public function showjobs($id)
    {
      $jobs = DB::table('jobs')
            ->where('jobs.job_id','=', $id)
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderBy('created_at', 'desc')
            ->get();
      $uid= auth()->user()->id;
      $applicable=DB::table('user_info')
                  ->where('user_info.user_id' ,'=',$uid)
                  ->join('skills', 'user_info.user_id','=','skills.user_id')
                  ->select('user_info.*','skills.*')
                  ->get();
            return view('jobs.chakriview', [
              'jobs'=>$jobs,
              'applicable'=>$applicable,

            ]);
    }


}
