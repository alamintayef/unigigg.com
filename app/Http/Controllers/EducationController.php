<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Education;
use App\Model\Student\University;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
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
      return view('student.degree',['uni'=> $uni]);
    }


    public function store(Request $request)
    {

          $this->validate($request, [
            'Degree_name'=> 'required|min:3|max:255',
            'Degree_type'=> 'required|max:10',
            'Degree_start_date'=> 'required',
            'Degree_end_date'=> 'required',
            'Degree_institute'=> 'required|max:50',
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

          notify()->flash('Added Successfully! Go to Dashboard', 'success', [
             'timer' => 3000,
             'text' => 'It\'s really great to see you again',
           ]);

           return redirect('/edu');
    }
    public function updateview(){



      return view('student.partials.update.eduview');

    }

    public function update(Request $request, $id)
    {

      $this->validate($request, [
        'Degree_name'=> 'required|min:3|max:255',
        'Degree_type'=> 'required|max:10',
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


      return redirect('/home');



    }
    public function destroy($id)
    {
      $edu = Education::where('education_id','=',$id);

      $edu->delete();

      return redirect('/home');

  }
}
