<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'news_title' => 'required',
            'news_description' => 'required',
            'news_start_date' => 'required',
            'news_link'=>'required',
            'news_last_date_of_application'=>'required',
            'hosted_by'=>'required',

        ]);

        $request->user()->news()->create([
            'news_title' => $request->title,
            'news_description' => $request->news_description,
            'news_slug' => str_slug($request->news_title),
            'news_start_date'=>$request->news_start_date,
            'news_link'=> $request->news_link,
            'news_last_date_of_application'=>$request->news_last_date_of_application,
            'hosted_by'=>$request->hosted_by,

        ]);
        notify()->flash('Added Successfully!', 'success', [
           'timer' => 2000,
           'text' => 'Thank you'
         ]);

        return redirect('/home');
    }
}
