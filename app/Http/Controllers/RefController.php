<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Reference;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Slack;
class RefController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $uid = auth()->user()->id;
      $var = Reference::where('user_id', $uid)->orderBy('created_at', 'desc')->get();
      return view('student.reference',[
        'var' => $var,
      ]);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'referred_by' => 'required|max:100',
        'reference_description' => 'required|max:500|min:20',
        'referee_number'=>'required|max:100|min:11',
      ]);
      $request->user()->ref()->create([
        'referred_by' => $request->referred_by,
        'reference_description' => $request->reference_description,
        'referee_number' => $request->referee_number,
      ]);
      $uid = auth()->user()->id;
      $name = auth()->user()->name;
      $email = auth()->user()->email;
      Slack::send(''.$name.' has added new reference. His/Her email is '.$email.' ');
      DB::table('users')->where('id','=',$uid)->increment('profile_count');
    

       return response()->json();
    }

    public function destroy($id)
    {
      $ref = Reference::where('id','=',$id);
      $ref->delete();

      return response()->json();


    }

}
