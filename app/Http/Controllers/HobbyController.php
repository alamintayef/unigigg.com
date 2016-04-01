<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Hobbies;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class HobbyController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('student.hobby');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'hobbies_name' => 'required|max:20',
            'hobbies_related_work' => 'required',

        ]);

        $request->user()->hobbies()->create([
            'hobbies_name' => $request->hobbies_name,
            'hobbies_related_work' => $request->hobbies_related_work,

        ]);
        Session::flash('flash_message','Hobby successfully added.');

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
