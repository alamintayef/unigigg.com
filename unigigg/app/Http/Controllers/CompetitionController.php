<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CompetitionController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'event_date' => 'required',
            'last_date_of_application'=>'required',
            'competition_link'=>'required',
            'organized_by'=>'required',

        ]);

        $request->user()->competition()->create([
            'title' => $request->title,
            'description' => $request->description,
            'competition_slug' => str_slug($request->title),
            'event_date'=>$request->event_date,
            'last_date_of_application'=>$request->last_date_of_application,
            'competition_link'=> $request->competition_link,
            'organized_by'=>$request->organized_by,

        ]);
        notify()->flash('Added Successfully!', 'success', [
           'timer' => 2000,
           'text' => 'Thank you'
         ]);

        return redirect('/home');
    }
}
