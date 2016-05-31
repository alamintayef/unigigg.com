<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\User;
use App\Model\Student\UserInfo;
use App\Model\Student\Experience;
use App\Model\Student\ExtraCur;
use App\Model\Student\Skills;
use App\Model\Student\Hobbies;
use App\Model\Student\Education;
use App\Model\Student\Interest;

use App\Model\Student\Reference;
use App\Model\Student\Image;
use App\Model\Student\EmInfo;
use App\Model\Student\Jobs;
use App\Http\Requests;

class DataController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');


    }
    public function createPdf(){
          $user_id= auth()->user()->id;
          $data = UserInfo::where('user_id', '=', $user_id)->get();
          $education = Education::where('user_id', '=', $user_id)->get();
          $skill = Skills::where('user_id', '=', $user_id)->get();
          $exps = Experience::where('user_id', '=', $user_id)->get();
          $refs = Reference::where('user_id', '=', $user_id)->get();
          $extras = ExtraCur::where('user_id', '=', $user_id)->get();
          $view =  \View::make('invoice', compact('data', 'education', 'skill', 'refs','exps','extras'))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view)->setPaper('a4', 'potrait');
           return $pdf->stream('cv.pdf');
      }
}
