<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Hobbies;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
class HobbyController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $uid = auth()->user()->id;
      $var = Hobbies::where('user_id', $uid)->orderBy('created_at', 'desc')->get();
      return view('student.hobby',[
        'var' =>$var,
      ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'hobbies_name' => 'required|max:200',
          //  'hobbies_related_work' => 'required',

        ]);

        $request->user()->hobbies()->create([
            'hobbies_name' => $request->hobbies_name,
            //'hobbies_related_work' => $request->hobbies_related_work,

        ]);
        notify()->flash('Added Successfully!', 'success', [
           'timer' => 2000,
           'text' => 'Add More or Check Dashboard'
         ]);

        return redirect('/hobby');
    }
    public function destroy($id)
    {
      $var = Hobbies::where('hobbies_id','=',$id);
      $var->delete();
      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 2000,

       ]);

      return redirect('/home');

    }
}
