<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use DB;
use Illuminate\Http\Request;
//models
use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;
use App\Model\Student\User;
use App\Model\Student\FunFacts;
use App\Model\Student\Image;
use App\Model\Student\EmInfo;
use App\Model\Student\Jobs;
use App\Model\Student\OddJobs;
use App\Model\Student\OddApplied;
use App\Model\Student\Reference;
use App\Model\Student\StudentApplied;
use App\Model\Student\Vprofile;
use App\Model\Student\University;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $infos = Userinfo::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
      $skill = Skills::where('user_id', $request->user()->id)->get();
      $interest = Interest::where('user_id', $request->user()->id)->get();
      $hobbies = Hobbies::where('user_id', $request->user()->id)->get();
      $education = Education::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->limit(5)->get();
      $experiences = Experience::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->limit(5)->get();
      $extracs = ExtraCur::where('user_id', $request->user()->id)->get();
      $funs = FunFacts::where('user_id', $request->user()->id)->get();
      $images = Image::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->limit(1)->get();
      $refs = Reference::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->limit(3)->get();
      $vdo = Vprofile::where('user_id', $request->user()->id)->get();
      $joblimit=StudentApplied::where('user_id', $request->user()->id)->get();
      $oddjoblimit=OddApplied::where('user_id', $request->user()->id)->get();
      $user=User::where('id', $request->user()->id)->first();

      //employer
      $eminfos = EmInfo::where('user_id', $request->user()->id)->get();
      $jobcount = DB::table('jobs')->select('jobs.*')->where('user_id', $request->user()->id)->count();
      //admin
      $allusers = User::where('type','=',1)->count();
      $allemployer = User::where('type','=',2)->count();
      $allJobs = Jobs::all();
      $allOddJobs = OddJobs::all();
      $uni = University::all()->count();





    return view('home', [
        'infos' => $infos,
        'skill' =>$skill,
        'interest' => $interest,
        'hobbies' => $hobbies,
        'education' =>$education,
        'experiences'=>$experiences,
        'extracs'=>$extracs,
        'funs'=>$funs,
        'refs'=>$refs,
        'images'=>$images,
        'joblimit'=>$joblimit,
        'oddjoblimit' => $oddjoblimit,
        'user' => $user,
       'vdo' => $vdo,
        //employer
        'eminfos'=>$eminfos,
        'jobcount' =>$jobcount,
        //admin
        'allusers' => $allusers,
        'allemployer'=>$allemployer,
        'allJobs' => $allJobs,
        'allOddJobs' => $allOddJobs,
        'uni' => $uni,

    ]);

    }
}
