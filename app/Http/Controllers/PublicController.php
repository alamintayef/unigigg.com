<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Student\Competition;
use DB;
use SMSGateway;
use App\Model\student\Training;

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

  public function viewme($useremail)
  {
    $user= DB::table('users')->select('users.*')->where('name','=',$useremail)->first();
    $image = DB::table('images')->select('images.*')->where('user_id','=',$user->id)->orderBy('created_at', 'desc')->first();
    $info = DB::table('user_info')->select('user_info.*')->where('user_id','=',$user->id)->first();
    $edu = DB::table('education')->select('education.*')->where('user_id','=',$user->id)->limit(4)->get();
    $skills = DB::table('skills')->select('skills.*')->where('user_id','=',$user->id)->get();
    $exp = DB::table('experiences')->select('experiences.*')->where('user_id','=',$user->id)->get();
    $about = DB::table('fun_facts')->select('fun_facts.*')->where('user_id','=',$user->id)->first();
    $extra = DB:: table('extra_curs')->select('extra_curs.*')->where('user_id','=',$user->id)->get();
    $ref  = DB:: table('references')->select('references.*')->where('user_id', '=',$user->id)->get();


    return view('cv.cvOne',[
      'user' => $user,
      'image'=> $image,
      'info' => $info,
      'edu' => $edu,
      'skills'=>$skills,
      'exp' => $exp,
      'about' => $about,
      'extra'=> $extra,
      'ref' => $ref,

    ]);
  }
  public function viewmetwo($useremail)
  {
    $user= DB::table('users')->select('users.*')->where('name','=',$useremail)->first();
    $image = DB::table('images')->select('images.*')->where('user_id','=',$user->id)->orderBy('created_at', 'desc')->first();
    $info = DB::table('user_info')->select('user_info.*')->where('user_id','=',$user->id)->first();
    $edu = DB::table('education')->select('education.*')->where('user_id','=',$user->id)->limit(4)->get();
    $skills = DB::table('skills')->select('skills.*')->where('user_id','=',$user->id)->get();
    $exp = DB::table('experiences')->select('experiences.*')->where('user_id','=',$user->id)->get();
    $about = DB::table('fun_facts')->select('fun_facts.*')->where('user_id','=',$user->id)->first();
    $extra = DB:: table('extra_curs')->select('extra_curs.*')->where('user_id','=',$user->id)->get();
    $ref  = DB:: table('references')->select('references.*')->where('user_id', '=',$user->id)->get();


    return view('cv.cvtwo',[
      'user' => $user,
      'image'=> $image,
      'info' => $info,
      'edu' => $edu,
      'skills'=>$skills,
      'exp' => $exp,
      'about' => $about,
      'extra'=> $extra,
      'ref' => $ref,

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
  public function showBlogs()
  {
    $blog = DB::table('blogs')
          ->join('users','blogs.user_id','=','users.id')
          ->select('blogs.*','users.name')->orderBy('created_at','desc')->take(10)->get();

    return view('blog.allblog')->with('blog',$blog);

  }

  public function showBlog($slug)
  {
    $article = DB::table('blogs')
            ->where('blogs.slug','=',$slug)
            ->join('users','blogs.user_id','=','users.id')
            ->select('blogs.*','users.name')
            ->first();

    return view('blog.article')->with('article',$article);

  }

  public function showVlog()
  {
    $vdos = DB::table('vlogvdos')->select('vlogvdos.*')->get();
    return view('vlog.layouts',[
      'vdos' => $vdos,
    ]);

  }
  public function showjobs($slug)
  {
    $job = DB::table('jobs')
          ->where('jobs.slug','=', $slug)
          ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
          ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
          ->orderBy('created_at', 'desc')
          ->first();

          return view('jobs.jobviewpublic', [
            'job'=>$job,


          ]);
  }
  public function showEccentricJobs($title)
  {
    $job = DB::table('odd_jobs')
          ->where('odd_jobs.title','=', $title)
          ->join('users', 'odd_jobs.user_id', '=', 'users.id')
          ->select('odd_jobs.*', 'users.name')
          ->orderBy('created_at', 'desc')
          ->first();

          return view('jobs.OddJobsPublicView', [
            'job'=>$job,
          ]);
  }

  public function search(Request $request)
  {
    $this->validate($request, [
      'search'=> 'required',
    ]);
     $search = \Request::get('search');

     $skill = DB::table('jobs')
            ->select('jobs.*')
            ->where('job_skill_reqs','like','%'.$search.'%')
            ->get();


    return view('search.people',[
        'skill'=> $skill,
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

          return view('chakri.regularchakri.publicCharkiSearch',[
            'jobs'=>$jobs
          ]);

  }

  //competition
  public function Competitionshow()
  {
    $competition= Competition::all();
    return view('competitions',[
      'competition' => $competition,
    ]);
  }

  public function Trainingshow()
  {
    $training= Training::all();
    return view('training',[
      'training' => $training,
    ]);
  }

}
