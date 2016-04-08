<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\OddApplied;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OddAppliedController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request)
    {

      $input = $request->all();

      OddApplied::create($input);

      notify()->flash('Applied Successfully!', 'success', [
         'timer' => 2000,

       ]);

      return redirect('/home');
    }
    public function destroy($id)
    {
      $var = OddApplied::where('id','=',$id);
      $var->delete();

      return redirect('/shortlists');

    }

}
