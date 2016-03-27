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

      return redirect('/home');
    }

}