<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
        $this->validate($request, [
            'bkash_number' => 'required|min:11',
            'transaction_id' => 'required',

        ]);

        $request->user()->bill()->create([
            'bkash_number' => $request->bkash_number,
            'transaction_id' => $request->transaction_id,

        ]);
        Session::flash('flash_message','Recorded Successfully. We will contact you within 24 hours .');

        return redirect('/home');
    }
}
