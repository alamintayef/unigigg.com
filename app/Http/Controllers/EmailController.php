<?php

namespace App\Http\Controllers;
use App\Model\Student\User;
use Illuminate\Http\Request;
use Mail;
use Mailgun;
use App\Http\Requests;
use DB;
class EmailController extends Controller
{
    //
    public function welcomeEmail(Request $request)
 {
     $users = User::all();
     foreach($users as $user) {
       Mailgun::send('email.test', ['user' => $user], function ($m) use ($user) {
         $m->from('tayef@unigigg.com', 'Tayef from unigigg');

         $m->to($user->email, $user->name)->subject('Welcome to unigigg');
     });
  }

     return redirect('/');

 }
}
