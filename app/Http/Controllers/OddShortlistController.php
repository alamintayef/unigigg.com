<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\OddShortlist;
use App\Http\Requests;
use DB;
class OddShortlistController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Request $request)
    {

      $input = $request->all();

      OddShortlist::create($input);

      return redirect('/shortlists');
    }

}
