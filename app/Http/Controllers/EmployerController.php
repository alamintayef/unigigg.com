<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Jobs;
use App\Model\Student\Area;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
        'area' => $area,
      ]);


    }


}
