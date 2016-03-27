<?php

namespace App\Http\Controllers;
use App\Model\Student\User;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class EmailController extends Controller
{
    //
    public function welcomeEmail(Request $request)
 {
     $users = User::find(1);
    // foreach($users as $user) {


     Mail::send('email.welcomeemail', ['user' => $users], function ($m) use ($users) {
         $m->from('tayef@unigigg.com', 'Tayef from unigigg');

         $m->to($users->email, $users->name)->subject('Welcome to unigigg');
     });
  // };

     return redirect('/');

 }
}
