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
    public function notifyuserAbout($email)
    {
      $user= DB::table('users')->where('email','=',$email)->select('users.*')->first();
      Mailgun::send('email.notify.notifyinfo',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('@unigigg.com', 'Get Noticed ! By telling More about you');
        $m->to($user->email)->subject('Hi ! Tell us more about you');
      });

      notify()->flash('Notifed Successfully!', 'success', [
         'timer' => 1000,

       ]);
      return redirect('home');

    }
    public function notifyuserInfo($email)
    {
      $user= DB::table('users')->where('email','=',$email)->select('users.*')->first();
      Mailgun::send('email.notify.notifyinfo',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('callforinterview@unigigg.com', 'Build up your profile');
        $m->to($user->email)->subject('Call for interview');
      });

    }
    public function notifyuserEducation($email)
    {
      $user= DB::table('users')->where('email','=',$email)->select('users.*')->first();
      Mailgun::send('email.admin.callforinterviewbyadmin',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('callforinterview@unigigg.com', 'Congrats ! You have been selected for and Interview');
        $m->to($user->email)->subject('Call for interview');
      });

    }
    public function notifyuserExperience($email)
    {
      $user= DB::table('users')->where('email','=',$email)->select('users.*')->first();
      Mailgun::send('email.admin.callforinterviewbyadmin',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('callforinterview@unigigg.com', 'Congrats ! You have been selected for and Interview');
        $m->to($user->email)->subject('Call for interview');
      });

    }
    public function notifyuserSkill($email)
    {
      $user= DB::table('users')->where('email','=',$email)->select('users.*')->first();
      Mailgun::send('email.admin.callforinterviewbyadmin',[ 'user' =>  $user ], function ($m) use ($user)
      {
        $m->from('callforinterview@unigigg.com', 'Congrats ! You have been selected for and Interview');
        $m->to($user->email)->subject('Call for interview');
      });

    }
}
