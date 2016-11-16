<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use App\Model\Student\EmInfo;
use DB;
use Slack;
class EmployerInfoController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('employer');
    }
  public function index(Request $request)
  {
       $eminfos = EmInfo::where('user_id', $request->user()->id)->first();

       return view('employer.employerinfo', [
         'eminfos'=>$eminfos,
       ]);
   }
   public function store(Request $request){
     // Store records process

            $this->validate($request, [
                 'company_name' => 'required|min:3',
                 'company_phone'=> 'required|min:11|max:14',
                 'company_email'=> 'required',
                 'company_address'=>'required',
                 'company_type'=>'required',
                 'company_size'=>'required',
                 'company_description'=>'required',
             ]);
             $uid= auth()->user()->id;
             $entrylimit=EmInfo::where('user_id','=' ,$uid)->count();
            if($entrylimit>0)
            {

              $EmInfo = EmInfo::where('user_id', '=' , $uid)->first();
              $EmInfo->company_name = $request->company_name;
              $EmInfo->company_phone = $request->company_phone;
              $EmInfo->company_email = $request->company_email;
              $EmInfo->company_address = $request->company_address;
              $EmInfo->company_type = $request->company_type;
              $EmInfo->company_size = $request->company_size;
              $EmInfo->company_description = $request->company_description;
              $EmInfo->save();
            }
            else{
              $request->user()->eminfo()->create([
                  'company_name' => $request->company_name,
                  'company_phone'=> $request->company_phone,
                  'company_email'=> $request->company_email,
                  'company_address' => $request->company_address,
                  'company_type' => $request->company_type,
                  'company_size' => $request->company_size,
                  'company_description' => $request->company_description,

              ]);
            }

            $name = auth()->user()->name;
            $email = auth()->user()->email;
            Slack::to('#unigigg-jobs')->send('' .$name.' has added his company info ');


             notify()->flash('Added Successfully! ', 'success', [
                'timer' => 2000,
                'text' => 'Please Check the Dashboard',
              ]);

              return redirect('/home');
        }
}
