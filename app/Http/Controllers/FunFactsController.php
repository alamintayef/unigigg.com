<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FunFactsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'fun_facts' => 'required|max:255',
            'inspiration_qot' =>'required|max:255',
            'Why_you'=> 'required',
            'Why_not_you'=> 'required',

        ]);

        $request->user()->funFacts()->create([
            'fun_facts' => $request->fun_facts,
            'inspiration_qot'=>$request->inspiration_qot,
            'Why_you' => $request->Why_you,
            'Why_not_you' => $request->Why__not_you,


        ]);
        notify()->flash('Added Successfully! Go to Dashboard', 'success', [
           'timer' => 3000,
           'text' => 'It\'s really great to see you again',
         ]);

         return redirect('/userinfo');
    }
}
