<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\FunFacts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FunFactsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      return view('student.about');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fun_facts' => 'required|',
            'inspiration_qot' =>'required',
            'Why_you'=> 'required',
            'Why_not_you'=> 'required',

        ]);

        $uid= auth()->user()->id;
        $entrylimit=FunFacts::where('user_id','=' ,$uid)->get();

        if(count($entrylimit)>0){
          $funFacts =FunFacts::where('user_id','=' ,$uid)->first();
          $funFacts->fun_facts = $request->fun_facts;
          $funFacts->inspiration_qot = $request->inspiration_qot;
          $funFacts->Why_you = $request->Why_you;
          $funFacts->Why_not_you = $request->Why_not_you;
          $funFacts->save();
        }
        else{
        $request->user()->funFacts()->create([
            'fun_facts' => $request->fun_facts,
            'inspiration_qot'=>$request->inspiration_qot,
            'Why_you' => $request->Why_you,
            'Why_not_you' => $request->Why_not_you,


        ]);
      }

        notify()->flash('About Added Successfully!', 'success', [
           'timer' => 2000,
           'text' => 'Awesome',
         ]);

         return redirect('/home');
    }
}
