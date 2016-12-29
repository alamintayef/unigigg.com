<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Skills;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Slack;
class SkillController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function view(){
    return view('student.skill');
  }
  public function index()
  {
    $uid = auth()->user()->id;
    $skill = Skills::where('user_id', $uid)->orderBy('created_at', 'desc')->get();

    return view('student.skill', [
      'skill'=>$skill,
    ]);
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'skill_name' => 'required|max:50',
      'skill_proof' => 'required|url'
  ]);
    $skill_name = $request->input('skill_name');

    $request->user()->skills()->create([
        'skill_name' => $skill_name,
        'skill_level' => $request->skill_level,
        'skill_experience' => $request->skill_experience,
        'skill_proof' => $request->skill_proof,
      ]);
      $uid = auth()->user()->id;
      $name = auth()->user()->name;
      $email = auth()->user()->email;
      Slack::send(''.$name.' has added a new skills. His/Her email is '.$email.'Skill Name : '.$request->skill_name.' Skills Proof: '.$request->skill_proof.'');

      DB::table('users')->where('id',$uid)->increment('profile_count');

  /*  notify()->flash('Added Successfully!', 'success', [
      'timer' => 2000,

    ]);
*/
  return response()->json($skill_name);

  }
  public function destroy($id)
  {
    $skill = Skills::find($id);
    $skill->delete();
    $uid=auth()->user()->id;
    DB::table('users')->where('id','=',$uid)->decrement('profile_count');

  /*  notify()->flash('Deleted Successfully!', 'success', [
      'timer' => 2000,

    ]);
    */

    return response()->json($id);

  }



}
