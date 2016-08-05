<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Student\Education;
use App\Model\Student\StudentApplied;
use App\Model\Student\User;

use App\Model\Student\Image;
use App\Model\Student\EmInfo;
use App\Model\Student\Jobs;
use DB;

class StudentAppliedController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $applied = DB::table('student_applieds')
            ->join('jobs', 'student_applieds.applied_for_job_id', '=', 'jobs.id')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('student_applieds.*', 'em_infos.company_name','jobs.job_last_date_application', 'jobs.job_name', 'jobs.id as job_id')
            ->get();

      return view('student.whereiapplied', [
        'applied'=>$applied,
      ]);

    }
    public function destroy($id)
    {
      $var = StudentApplied::where('applied_id','=',$id);
      $var->delete();

      return redirect('/jobsapplied');

    }


}
