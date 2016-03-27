<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Skills;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SkillController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'skill_name' => 'required|max:50',
      'skill_experience' => 'required|max:2|min:1',


    ]);

    $request->user()->skills()->create([
      'skill_name' => $request->skill_name,
      'skill_level' => $request->skill_level,
      'skill_experience' => $request->skill_experience,
    ]);
    notify()->flash('Added Successfully!', 'success', [
      'timer' => 3000,
      'text' => 'It\'s really great to see you again',
    ]);


    return redirect('/userinfo');

  }
  public function destroy($id)
  {
    $skill = Skills::where('skill_id','=',$id);
    $skill->delete();
    notify()->flash('Added Successfully!', 'Danger', [
      'timer' => 3000,
      'text' => 'It\'s really great to see you again',
    ]);

    return redirect('/home');

  }
  public function add_skill_proof($id,Request $request)
  {
    $this->validate($request, [
      'skill_proof' => 'url',

    ]);

    DB::table('skills')
          ->where('skill_id', $id)
          ->update(['skill_proof' => $request->skill_proof]);


    return redirect('/shortlists');
  }

}
