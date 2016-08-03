<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Validator;
use App\Model\Student\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
class ImageController extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    return view('student.propic');
  }


  public function store(Request $request){
    // Store records process
    $this->validate($request, [
      'filePath' => 'required|image|mimes:jpeg,jpg,bmp,png,gif',
    ]);



    $image = new Image();

    if($request->hasFile('filePath')) {
      $file = Input::file('filePath');
      //getting timestamp
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

      $name = $timestamp. '-' .$file->getClientOriginalName();

      $image->filePath = $name;

      $file->move('files/images/', $name);
    }

    $request->user()->images()->create([
      'filePath' => $name,
    ]);
    notify()->flash('Added Successfully!', 'success', [
      'timer' => 3000,

    ]);



    return Redirect::to('home');
  }
  public function update($id, Request $request)
  {
    $image = Image::findOrFail($id);

    $this->validate($request, [
      'filePath' => 'required',

    ]);

    if($request->hasFile('filePath')) {
      $file = Input::file('filePath');
      //getting timestamp
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

      $name = $timestamp. '-' .$file->getClientOriginalName();

      $image->filePath = $name;

      $file->move(public_path().'/images/', $name);
    }

    $request->user()->images()->create([
      'filePath' => $name,
    ]);



    return redirect('home');
  }
}
