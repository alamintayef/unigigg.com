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
        notify()->flash('Recorded Successfully!', 'success', [
           'timer' => 3000,
           'text' => 'We will contact you within 24 hours and validate your profile with 48 hours ! ',
         ]);


        return redirect('/payment');
    }
}
