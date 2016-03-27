<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployerShortlistController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('auth');
    }
}
