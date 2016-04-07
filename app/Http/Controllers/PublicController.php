<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use SMSGateway;

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
  public function publiceccentricboard(Request $request)
  {

    $jobs = DB::table('odd_jobs')
    ->join('users', 'odd_jobs.user_id', '=', 'users.id')
    ->select('odd_jobs.*', 'users.name')
    ->orderByRaw("RAND()")->get();


    return view('info.publiceccentric', [
      'jobs'=>$jobs,


    ]);
  }
  public function sendsms()
  {

  $deviceID = '20198';
  $number = '+8801753335198';
  $message = 'Welcome! Navil Bhaiya valo aso ?.';

  $message =  SMSGateway::sendMessageToNumber($number, $message, $deviceID);
  return redirect('/');
  }


}
