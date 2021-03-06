<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\Jobs;
use App\Model\Student\User;
use App\Model\Student\Area;
use App\Model\Student\UserInfo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Mailgun;
use Mail;
use Slack;
use Carbon\Carbon;
class JobsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('employer');
    }
    public function postjobs(Request $request)
    {
      $area  = Area::all();
      $postedjobs = Jobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
      $uid= auth()->user()->id;
      $postable=DB::table('em_infos')
                  ->where('em_infos.user_id' ,'=',$uid)
                  ->select('em_info.*')
                  ->count();

      return view('employer.postjob', [
        'postedjobs'=>$postedjobs,
        'postable' => $postable,
        'area' =>$area,

      ]);


    }

    public function store(Request $request)
    {
        $current = Carbon::now();
        $slug=str_slug($request->job_name);
        $jobname=$request->job_name;
        $jobType=$request->job_type;
        $deadline= $request->job_last_date_application;
        // add 30 days to the current time
        $jobExpires = $current->addDays(30);
        $this->validate($request, [
            'job_name' => 'required|max:255',
            'job_type' => 'required|min:1',
            'job_salary' => 'required|min:4|max:12',
            'job_location' => 'required|min:4',
            'job_description' => 'required|min:10',
            'min_edu_level' => 'required',
            'major' => 'required|min:1',
            'cgpa' => 'required|min:1',
          //  'job_skill_reqs' => 'required',
          //  'job_start_date' => 'required|date',
          //  'job_last_date_application' => 'required|date',


        ]);

        $request->user()->jobs()->create([
            'job_name' => $request->job_name,
            'job_type' => $request->job_type,
            'job_salary' => $request->job_salary,
            'job_location' => $request->job_location,
            'job_description' => $request->job_description,
            'min_edu_level' =>$request->min_edu_level,
            'major'=> $request->major,
            'cgpa' => $request->cgpa,
            'job_skill_reqs'=>$request->job_skill_reqs,
            'job_reqs_additional' => $request->job_reqs_additional,
            'job_start_date' => $request->job_start_date,
            'job_last_date_application' => $request->job_last_date_application,
            'job_expires' => $jobExpires,
            'paid' => $request->paid,
            'slug' => $slug,


        ]);
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        Slack::to('#unigigg-jobs')->send('A new job has been posted titled : '.$request->job_name.'Please find the job details at www.unigigg.com/view/jobs/'.$slug.' ');
        /*
       $users = DB::table('users')->where('type','=',1)->get();

        foreach($users as $user) {
          Mailgun::send('email.notify.jobalert', ['user' => $user,'slug'=> $slug,'jobname'=>$jobname,'jobType'=>$jobType,'deadline'=>$deadline], function ($m) use ($user, $slug,$jobname,$jobType,$deadline) {
            $m->from('tayef@unigigg.com', ''.$jobname.' ');

            $m->to($user->email)->subject('New Job Posted');
        });
     }
     */
      //  $name = $request->job_name;
        return redirect('postedjobs');;


    }

    public function updateview($id)
    {
      $jobs =Jobs::findorFail($id);
        $area =Area::all();
      return view('employer.jobupdate',[
        'jobs'=> $jobs,
        'area' => $area,
      ]);
    }

    public function update(Request $request, $id)
    {

      $this->validate($request, [
          'job_name' => 'required|max:255',
          'job_type' => 'required',
          'job_salary' => 'required|min:4|max:20',
          'job_location' => 'required',
          'job_description' => 'required',
          'min_edu_level' => 'required',
          'major' => 'required',
          'cgpa' => 'required',
          'job_skill_reqs' => 'required',
          'job_start_date' => 'required|date',
          'job_last_date_application' => 'required|date',

      ]);


      $jobs = Jobs::findorFail($id);
      $jobs->job_name = $request->job_name;
      $jobs->job_type = $request->job_type;
      $jobs->job_salary = $request->job_salary;
      $jobs->job_location = $request->job_location;
      $jobs->job_description = $request->job_description;
      $jobs->min_edu_level =$request->min_edu_level;
      $jobs->major = $request->major;
      $jobs->cgpa = $request->cgpa;
      $jobs->job_skill_reqs=$request->job_skill_reqs;
      $jobs->job_reqs_additional = $request->job_reqs_additional;
      $jobs->job_start_date = $request->job_start_date;
      $jobs->job_last_date_application = $request->job_last_date_application;
      $jobs->paid= $request->paid;
      $jobs->slug = str_slug($request->job_name);
      $jobs->save();

      notify()->flash('Updated Successfully!', 'success', [
         'timer' => 2000,

       ]);
    /*   $data = array('company_name' => $employer->company_name,'email'=> $employer->email,'jname'=>$employer->job_name,'name'=> $user->name);

       $users = User::where('type','=','1');


         Mailgun::send('email.test', ['user' => $user], function ($m) use ($user) {
           $m->from('tayef@unigigg.com', 'New job posted');

           $m->to('sarkeralaminnsu@gmail.com')->subject('Hello ! A new job');
       });
*/
      return redirect('/postedjobs');

    }




    public function show(Request $request)
    {

      $postedjobs = Jobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
      $area =Area::all();
      return view('employer.postedjobs', [
        'postedjobs'=>$postedjobs,
        'area'=> $area,

      ]);
    }
    public function Applicationshow(Request $request)
    {
      $postedjobs = Jobs::where('user_id', $request->user()->id)->select('jobs.job_name','jobs.id')->orderBy('created_at', 'desc')->get();
      $area =Area::all();
      return view('employer.ShowApplication', [
        'postedjobs'=>$postedjobs,
        'area'=> $area,

      ]);
    }
    public function jobboard(Request $request)
    {

      $jobs = DB::table('jobs')
            ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
            ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
            ->orderBy('created_at', 'desc')
            ->get();

      return view('jobs', [
        'jobs'=>$jobs,

      ]);
    }


    public function destroy($id)
    {
      $jobs = Jobs::where('id','=',$id);

      $jobs->delete();
      notify()->flash('Deleted Successfully!', 'success', [
        'timer' => 2000,

      ]);

      return redirect('/postedjobs');

  }
  public function oddwhoapplied()
  {

    $applied = DB::table('odd_applieds')
    ->join('user_info', 'odd_applieds.user_id', '=', 'user_info.user_id')
    ->join('odd_jobs', 'odd_applieds.applied_for_job_id', '=', 'odd_jobs.odd_id')
    ->select('odd_applieds.*', 'user_info.*','odd_jobs.odd_id', 'odd_jobs.title','odd_jobs.user_id')
    ->get();



    return view('jobs.oddappliedem', [
      'applied'=>$applied,

    ]);
  }
  public function showjobs($id)
  {
    $job = DB::table('jobs')
          ->where('jobs.id','=', $id)
          ->join('em_infos', 'jobs.user_id', '=', 'em_infos.user_id')
          ->select('jobs.*', 'em_infos.company_name', 'em_infos.company_type')
          ->orderBy('created_at', 'desc')
          ->first();
    $uid= auth()->user()->id;
    $applicable=DB::table('user_info')
                ->where('user_info.user_id' ,'=',$uid)
                ->join('skills', 'user_info.user_id','=','skills.user_id')
                ->join('education', 'education.user_id','=','skills.user_id')
                ->select('user_info.*','skills.*','education.*')
                ->get();

          return view('jobs.jobview', [
            'job'=>$job,
            'applicable'=>$applicable,

          ]);
  }

}
