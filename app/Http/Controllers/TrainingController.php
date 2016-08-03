<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\student\Training;
use DB;
class TrainingController extends Controller
{
    //
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $training= Training::all();
      return view('Training.training',[
        'training' => $training,
      ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'training_description' => 'required',
            'training_type' => 'required',
            'application_fee'=>'required',
            'application_dead_line'=>'required',
            'payment_method'=>"required",
            'organized_by'=>'required',

        ]);

        Training::create([
            'title' => $request->title,
            'training_description' => $request->training_description,
            'news_slug' => str_slug($request->title),
            'training_type'=>$request->training_type,
            'application_fee'=> $request->application_fee,
            'training_start_date'=> $request->training_start_date,
            'application_dead_line'=>$request->application_dead_line,
            'payment_method'=>$request->payment_method,
            'organized_by'=>$request->organized_by,
          ]);
        notify()->flash('Added Successfully!', 'success', [
           'timer' => 2000,
           'text' => 'Thank you'
         ]);

        return redirect('/home');
    }
}
