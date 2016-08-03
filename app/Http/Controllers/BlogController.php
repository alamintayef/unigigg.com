<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class BlogController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');

    }
    public function index()
    {
      return view('blog.postblog');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs',
            'body' => 'required',

        ]);

        $request->user()->blog()->create([
            'title' => $request->title,
            'subtitle'=> $request->subtitle,
            'body' => $request->body,
            'slug' => str_slug($request->title),

        ]);
        notify()->flash('Added Successfully!', 'success', [
           'timer' => 2000,
           'text' => 'Thank you'
         ]);

        return redirect('/home');
    }
}
