<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Reference;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RefController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('student.reference');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'referred_by' => 'required|max:100',
        'reference_description' => 'required',
        'referee_number'=>'required|max:14|min:11',


      ]);

      $request->user()->ref()->create([
        'referred_by' => $request->referred_by,
        'reference_description' => $request->reference_description,
        'referee_number' => $request->referee_number,
      ]);

      notify()->flash('Added Successfully! Go to Dashboard', 'success', [
         'timer' => 3000,
         'text' => 'It\'s really great to see you again',
       ]);

       return redirect('/refs');
    }

    public function destroy($id)
    {
      $ref = Reference::where('id','=',$id);
      $ref->delete();

      return redirect('/home');


    }

}
