<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\ExtraCur;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ExtraCurController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $uid = auth()->user()->id;
      $var = ExtraCur::where('user_id', $uid)->orderBy('created_at', 'desc')->get();
      return view('student.excc',[
        'var' =>$var,
      ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'excc_name' => 'required|max:250',
            'excc_start_date' => 'required|date',
            'excc_end_date' => 'required|date',
            'excc_description' => 'required',

        ]);

        $request->user()->exccs()->create([
            'excc_name' => $request->excc_name,
            'excc_start_date' => $request->excc_start_date,
            'excc_end_date' => $request->excc_end_date,
            'excc_description' => $request->excc_description,

        ]);
        $uid = auth()->user()->id;
        DB::table('users')->where('id','=',$uid)->increment('profile_count');
        notify()->flash('Added Successfully! Go to Dashboard', 'success', [
           'timer' => 2000,

         ]);

         return redirect('/excc');
    }
    public function destroy($id)
    {
      $var = ExtraCur::where('extra_id','=',$id);
      $var->delete();
      $uid = auth()->user()->id;
    DB::table('users')->where('id','=',$uid)->decrement('profile_count');
      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 2000,

       ]);
      return redirect('/home');

    }
}
