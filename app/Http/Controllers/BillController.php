<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\User;
use App\Model\Student\Jobs;
use App\Http\Requests;
use Mailgun;
use DB;
use Slack;
class BillController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');


    }
    public function index()
    {
      return view('admin.payment');
    }
    public function store(Request $request)
    {


        $request->user()->bill()->create([
            'bkash_number' => $request->bkash_number,
            'transaction_id' => $request->transaction_id,

        ]);
        $id = auth()->user()->id;
        $user= User::findorFail($id);
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        Slack::send('Hello Admin, I am '.$name.'. Please Verify my profile. My email is '.$email.' Bkash number: '.$request->bkash_number.' Transaction ID: '.$request->transaction_id.' ');

        notify()->flash('Recorded Successfully!', 'success', [
           'timer' => 3000,
           'text' => 'We will contact you within 24 hours and validate your profile with 48 hours ! ',
         ]);
         return redirect('/Home');
    }
    public function appointment($id)
    {
      $job=DB::table('jobs')->select('jobs.*')->where('id','=',$id)->first();

      return view('employer.appointment.paynsetappointment',[
        'job'=> $job,
      ]);
    }


    public function employerreqstore(Request $request)
    {
        $this->validate($request, [
            'appointment' => 'date',
            //'appoint_time' => 'time'
            'identifier' => 'required|min:8|max:20',
            'transaction_id' => 'required',

        ]);
        $request->user()->c4i()->create([
            'appointment'=> $request->appointment,
            'appoint_time' => $request->appoint_time,
            'id' =>$request->id,
            'identifier' => $request->identifier,
            'transaction_id' => $request->transaction_id,
          ]);
        $id = auth()->user()->id;
        $user= User::findorFail($id);
        Mailgun::send('email.Verify',[ 'user' =>  $user ], function ($m) use ($user)
        {
          $m->from('callforinterview@unigigg.com', 'Call for interview');
          $m->to('tayef@unigigg.com')->subject('Call for interview Request');
        });
        notify()->flash('Recorded Successfully!', 'success', [
           'timer' => 3000,
           'text' => 'Thank you ! ',
         ]);
         return redirect('/home');
  }

  public function verifyme(){

    return view('admin.user.verifyme');

  }

}
