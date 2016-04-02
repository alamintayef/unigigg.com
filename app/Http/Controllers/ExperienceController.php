<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Experience;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('student.experience');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'exp_name' => 'required|max:50',
            'exp_start_date' => 'required|date',
            'exp_end_date' => 'required|date',
            'exp_description' => 'required',
            'exp_validation' => 'required',

        ]);

        $request->user()->experiences()->create([
            'exp_name' => $request->exp_name,
            'exp_start_date' => $request->exp_start_date,
            'exp_end_date' => $request->exp_end_date,
            'exp_description' => $request->exp_description,
            'exp_validation'  => $request->exp_validation,

        ]);
        notify()->flash('Added Successfully! Go to Dashboard', 'success', [
           'timer' => 2000,

         ]);

         return redirect('/experience');
    }
    public function destroy($id)
    {
      $var = Experience::where('exp_id','=',$id);
      $var->delete();
      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 2000,

       ]);

      return redirect('/home');

    }
}
