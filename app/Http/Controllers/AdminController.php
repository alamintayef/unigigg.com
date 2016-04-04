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
use DB;

class AdminController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $alluser = User::all();

      return view('admin.userboard',[
        'alluser' => $alluser,
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

    public function verification(){

      $varreqs = DB::table('users')
              ->join('billings', 'users.id', '=', 'billings.user_id')
              ->select('users.*','billings.*')
              ->get();
      return view('admin.verification',[
        'varreqs' => $varreqs,
      ]);

    }

    public function verify($id){


      DB::table('users')
                  ->where('id', $id)
                  ->update(['verified' => '1']);

        return redirect('verification')   ;
    }
}
