<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\ExtraCur;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExtraCurController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      return view('student.excc');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'excc_name' => 'required|max:50',
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
        notify()->flash('Added Successfully! Go to Dashboard', 'success', [
           'timer' => 3000,
           'text' => 'It\'s really great to see you again',
         ]);

         return redirect('/excc');
    }
    public function destroy($id)
    {
      $var = ExtraCur::where('excc_id','=',$id);
      $var->delete();

      return redirect('/home');

    }
}
