<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Hobbies;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        notify()->flash('Added Successfully! Go to Dashboard', 'success', [
           'timer' => 3000,
           'text' => 'It\'s really great to see you again',
         ]);

         return redirect('/userinfo');
    }
    public function destroy($id)
    {
      $var = Hobbies::where('hobbies_id','=',$id);
      $var->delete();

      return redirect('/home');

    }
}
