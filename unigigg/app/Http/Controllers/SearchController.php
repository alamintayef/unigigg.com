<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class SearchController extends Controller
{
    //
    public function searcharea(Request $request)
    {
      $this->validate($request, [
        'search'=> 'required',
      ]);
       $search = \Request::get('search');

       $oddjobs = DB::table('odd_jobs')
              ->select('odd_jobs.*')
              ->where('area','like','%'.$search.'%')
              ->get();
        $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();

      return view('jobs.search.search',[
          'oddjobs'=> $oddjobs,
          'applicable'=> $applicable,
        ]);
    }
    public function searchtuition(Request $request)
    {
      $this->validate($request, [
        'search'=> 'required',
      ]);
       $search = \Request::get('search');

       $oddjobs = DB::table('odd_jobs')
              ->select('odd_jobs.*')
              ->where('type','=','Tution')
              ->where('area','like','%'.$search.'%')
              ->get();
        $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();

      return view('jobs.search.searchtuition',[
          'oddjobs'=> $oddjobs,
          'applicable'=> $applicable,
        ]);
    }
    public function searchassignment(Request $request)
    {
      $this->validate($request, [
        'search'=> 'required',
      ]);
       $search = \Request::get('search');

       $oddjobs = DB::table('odd_jobs')
              ->select('odd_jobs.*')
              ->where('type','=','Assignment')
              ->where('area','like','%'.$search.'%')
              ->get();
        $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();

      return view('jobs.search.searchassignment',[
          'oddjobs'=> $oddjobs,
          'applicable'=> $applicable,
        ]);
    }
    public function searchother(Request $request)
    {
      $this->validate($request, [
        'search'=> 'required',
      ]);
       $search = \Request::get('search');

       $oddjobs = DB::table('odd_jobs')
              ->select('odd_jobs.*')
              ->where('type','=','Others')
              ->where('area','like','%'.$search.'%')
              ->get();
        $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();

      return view('jobs.search.searchothers',[
          'oddjobs'=> $oddjobs,
          'applicable'=> $applicable,
        ]);
    }

}
