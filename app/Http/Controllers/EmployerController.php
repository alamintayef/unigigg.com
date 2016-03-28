<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Jobs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    //
    public function index()
    {
      return view('home');
    }


    public function register()
    {
      return view('employer.auth.register');
    }
    public function postjobs(Request $request)
    {
      $postedjobs = Jobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
      return view('employer.postjob', [
        'postedjobs'=>$postedjobs,
      ]);

    }


}
