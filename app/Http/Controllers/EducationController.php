<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Education;
use App\Model\Student\University;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Slack;
class EducationController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $uni= DB::table('universities')->select('universities.*')->orderBy('university', 'ASC')->get();
      $uid = auth()->user()->id;
      $var = Education::where('user_id', $uid)->orderBy('created_at', 'asc')->get();

      return view('student.degree',[
        'uni'=> $uni,
        'var' => $var,
      ]);
    }


    public function store(Request $request)
    {

          $this->validate($request, [
            'Degree_name'=> 'required|min:3|max:255',
          //  'Degree_type'=> 'required|max:10',
            'Degree_start_date'=> 'required',
            'Degree_end_date'=> 'required',
          // 'Degree_institute'=> 'required|max:50',
            'Degree_result'=>'required',


          ]);

        $request->user()->education()->create([
              'Degree_name'=> $request->Degree_name,
              'Degree_type'=> $request->Degree_type,
              'Degree_start_date'=> $request->Degree_start_date,
              'Degree_end_date'=> $request->Degree_end_date,
              'Degree_institute'=> $request->Degree_institute,
              'Degree_result'=> $request->Degree_result,
          ]);
          $uid = auth()->user()->id;
          $name = auth()->user()->name;
          $email = auth()->user()->email;
          Slack::send(''.$name.' has added new Degree. His/Her email is '.$email.' ');

      DB::table('users')->where('id','=',$uid)->increment('profile_count');

          notify()->flash('Added Successfully! Go to Dashboard', 'success', [
             'timer' => 2000,
             'text' => 'Add More',
           ]);

           return redirect('/edu');
    }
    public function updateview($id){

      $edu = Education::findorFail($id);

      return view('student.partials.update.eduview')->with('edu',$edu);

    }

    public function update(Request $request, $id)
    {

      $this->validate($request, [
        'Degree_name'=> 'required|min:3|max:255',
      // 'Degree_type'=> 'required|max:10',
        'Degree_start_date'=> 'required',
        'Degree_end_date'=> 'required',
       'Degree_institute'=> 'required|max:50',
        'Degree_result'=>'required',


      ]);



      $edu = Education::findorFail($id);
      $edu->Degree_name = $request->Degree_name;
      $edu->Degree_type = $request->Degree_type;
      $edu->Degree_start_date = $request->Degree_start_date;
      $edu->Degree_end_date = $request->Degree_end_date;
      $edu->Degree_institute = $request->Degree_institute;
      $edu->Degree_result = $request->Degree_result;
      $edu->save();
      notify()->flash('Updated Successfully!', 'success', [
         'timer' => 2000,

       ]);

      return redirect('/home');



    }
    public function destroy($id)
    {
      $edu = Education::where('id','=',$id);

      $edu->delete();
      $uid = auth()->user()->id;
      DB::table('users')->where('id','=',$uid)->decrement('profile_count');

      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 2000,

       ]);


      return redirect('/home');

  }
}
