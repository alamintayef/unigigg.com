<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Hobbies;

use App\Http\Controllers\Controller;
use Session;
use DB;
class HobbyController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function hobbyview(){

      return view('student.hobby');

    }
    public function index()
    {

      $uid = auth()->user()->id;
      $data = Hobbies::where('user_id', $uid)->orderBy('created_at', 'desc')->limit(1)->first();

      return response()->json($data->hobbies_name);

    }
    public function ajaxGet()
    {
      $x =str_random(3);
      $y =str_random(4);
      $data =  array('value' => $x , 'input' => $y);
      $uid = auth()->user()->id;
      $var = Hobbies::where('user_id', $uid)->orderBy('created_at', 'desc')->limit(1)->first();
      $data = $var->hobbies_name;
      // return a JSON response
      return  response()->json($data);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'hobbies_name' => 'required|max:200',
          //  'hobbies_related_work' => 'required',

        ]);
        $hobbies_name = $request->input('hobbies_name');
        $request->user()->hobbies()->create([
            'hobbies_name' => $hobbies_name,
            //'hobbies_related_work' => $request->hobbies_related_work,

        ]);
      //  return redirect('hobby')->with('message', 'Added Successfully')->with('message-type', 'success');

        //if ($request->ajax()) {
        return response()->json($hobbies_name);
    //  }else{
    //    return redirect('hobby')->with('message', 'Added Successfully')->with('message-type', 'success');

    //  }


    }
    public function destroy($id)
    {
      $var = Hobbies::where('hobbies_id','=',$id);
      $var->delete();
      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 2000,

       ]);

      return redirect('/home');

    }
}
