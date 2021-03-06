<?php

namespace App\Http\Controllers\Auth;

use App\Model\Student\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mailgun;
use Carbon\Carbon;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:8',
            'type'=> 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
           Mailgun::send('email.welcomeemail',[ 'data' =>  $data ], function ($m) use ($data) {
           $m->from('tayef@unigigg.com', 'Tayef from unigigg');

           $m->to($data['email'], $data['name'])->subject('Welcome to unigigg');
       });

      Mailgun::send('email.admin.informadmin',[ 'data' =>  $data ], function ($m) use ($data) {
       $m->from('tayef@unigigg.com', 'Tayef from unigigg');

       $m->to('sarkeralaminnsu@gmail.com')->subject('A New User Just Signed Up');
     });

       notify()->flash('Welcome!', 'success', [
          'timer' => 3000,

        ]);
        $current = Carbon::now();

        // add 30 days to the current time
        $freeExpires = $current->addDays(30);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'type' => $data['type'],
            'expireson'=> $freeExpires,
        ]);
    }
}
