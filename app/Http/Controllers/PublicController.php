<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class PublicController extends Controller
{
    //
    public function publicboard(Request $request)
    {

      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderByRaw("RAND()")->get();
          
      $applied = DB::table('student_applieds')
              ->select('student_applieds.*')
              ->get();

      return view('info.public', [
        'jobs'=>$jobs,
        'applied'=> $applied,

      ]);
    }
}
