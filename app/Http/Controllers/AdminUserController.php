<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Mailgun;
use SMSGateway;
use Carbon\Carbon;
use App\Model\Student\User;
use Validator;

class AdminUserController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware(['auth','employer']);
    }

    public function index()
    {
      return view('admin.user.createuser');
    }


    public function createUser(Request $request)
    {
      $this->validate($request, [

        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|confirmed|min:8',
        'type'=> 'required',

      ]);

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'type' => $request->type,

      ]);
      notify()->flash('Added Successfully!', 'success', [
         'timer' => 1000,

       ]);
      return redirect('home');
    }

    public function deleleUser($id)
    {
      $user = User::findorFail($id);
      $user->delete();

      notify()->flash('Deleted Successfully!', 'success', [
         'timer' => 1000,

       ]);

         return redirect('home');

    }
}
