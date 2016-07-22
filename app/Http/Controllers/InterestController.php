<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Interest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
class InterestController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $uid = auth()->user()->id;
      $var = Interest::where('user_id', $uid)->orderBy('created_at', 'desc')->get();
      return view('student.interest',[
        'var' =>$var,
      ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'interest_name' => 'required|max:200',

        ]);
        $uid= auth()->user()->id;
        $entrylimit=Interest::where('user_id','=' ,$uid)->get();
        if(count($entrylimit)>0){
          $cv =Interest::where('user_id','=' ,$uid)->first();
          $cv->interest_name = $request->interest_name;
          $cv->save();
        }

        $request->user()->interests()->create([
            'interest_name' => $request->interest_name,

        ]);
        $uid = auth()->user()->id;
      DB::table('users')->where('id','=',$uid)->increment('profile_count');
       notify()->flash('Added Successfully! Go to Dashboard', 'success', [
          'timer' => 2000,

        ]);

        return redirect('/interest');
    }
    public function destroy($id)
    {
      $interest = Interest::where('interest_id','=',$id);
      $interest->delete();
      $uid = auth()->user()->id;
    DB::table('users')->where('id','=',$uid)->decrement('profile_count');
      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 1000,

       ]);

      return redirect('/home');

    }
}
