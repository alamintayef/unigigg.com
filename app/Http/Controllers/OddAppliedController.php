<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\OddApplied;
use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Reference;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;
use App\Model\Student\User;
use App\Model\Student\FunFacts;
use App\Model\Student\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OddAppliedController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request)
    {

      $input = $request->all();

      OddApplied::create($input);

      notify()->flash('Applied Successfully!', 'success', [
         'timer' => 2000,

       ]);

      return redirect('/home');
    }
    public function destroy($id)
    {
      $var = OddApplied::where('id','=',$id);
      $var->delete();

      return redirect('/eccentric/jobs/whoapplied');

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
      return view('student.studentoddview', [
        'profile'=>$profile,
        'skill'=>$skill,
        'education'=> $education,
        'exps'=> $exps,
        'refs'=> $refs,
        'images'=> $images,
        'user' => $user,



      ]);


    }

}
