<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function postjobs()
    {
      return view('employer.postjob');
    }


}
