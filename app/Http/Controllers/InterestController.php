<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Interest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class InterestController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'interest_name' => 'required|max:20',

        ]);

        $request->user()->interests()->create([
            'interest_name' => $request->interest_name,

        ]);
       notify()->flash('Added Successfully! Go to Dashboard', 'success', [
          'timer' => 3000,
          'text' => 'It\'s really great to see you again',
        ]);

        return redirect('/userinfo');
    }
    public function destroy($id)
    {
      $interest = Interest::where('interest_id','=',$id);
      $interest->delete();

      return redirect('/home');

    }
}
