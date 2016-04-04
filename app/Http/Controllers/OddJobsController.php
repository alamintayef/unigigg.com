<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student\OddJobs;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
class OddJobsController extends Controller
{
      //
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function index(){

        $oddjobs = OddJobs::all();
        $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();
        return view('jobs.oddjobs',[
          'oddjobs'=> $oddjobs,
          'applicable'=> $applicable
        ]);

      }
      public function tuitions()
      {
        $tuitions = OddJobs::where('type','=', 'Tution')->get();
            $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();
        return view('jobs.tuitions',[
          'tuitions'=> $tuitions,
          'applicable'=> $applicable
        ]);


      }
      public function assignements()
      {
        $assignements = OddJobs::where('type','=', 'Assignment')->get();
        $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();
        return view('jobs.assignement',[
          'assignements'=> $assignements,
          'applicable'=> $applicable
        ]);

      }

      public function others()
      {
        $others = OddJobs::where('type','=', 'Others')->get();
            $uid= auth()->user()->id;
        $applicable=DB::table('user_info')
                    ->where('user_info.user_id' ,'=',$uid)
                    ->join('skills', 'user_info.user_id','=','skills.user_id')
                    ->select('user_info.*','skills.*')
                    ->get();
        return view('jobs.others',[
          'others'=> $others,
          'applicable'=> $applicable
        ]);


      }
      public function postedones(Request $request)
      {
        $postedjobs = OddJobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();

        return view('jobs.postedoddjobs',[
          'postedjobs'=> $postedjobs,
        ]);
      }

      public function postjobs(Request $request)
      {
        $postedjobs = OddJobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
        $uni= DB::table('universities')->select('universities.*')->orderBy('university', 'ASC')->get();

        return view('jobs.postoddjobs',[
          'uni'=> $uni,
          'postedjobs'=>$postedjobs,

        ]);

      }
      public function empostjobs(Request $request)
      {
        $postedjobs = OddJobs::where('user_id', $request->user()->id)->orderBy('created_at', 'desc')->get();
        $uni= DB::table('universities')->select('universities.*')->orderBy('university', 'ASC')->get();
        return view('jobs.empostoddjobs',[
          'uni'=> $uni,
          'postedjobs'=>$postedjobs,
        ]);

      }

      public function postjob(Request $request)
      {
        $current = Carbon::now();

        // add 30 days to the current time
        $jobExpires = $current->addDays(7);
        $this->validate($request, [
          'title'         => 'required|min:3|max:255',
          'type'          => 'required',
          'description'   => 'required',
          'offering'      => 'required',
          'area'          => 'required',
          'university'    => 'min:5|max:50',


        ]);

        $request->user()->oddjobs()->create([
          'title'=> $request->title,
          'type' => $request->type,
          'description' => $request->description,
          'offering' => $request->offering,
          'area' => $request->area,
          'university' => $request->university,
          'job_expires' => $jobExpires,

        ]);
        notify()->flash('Posted Successfully!', 'success', [
           'timer' => 1000,
           'text' => 'Thank you for posting the job',

         ]);

        return redirect('/home');

      }
      public function whoapplied()
      {

        $applied = DB::table('odd_applieds')
        ->join('user_info', 'odd_applieds.user_id', '=', 'user_info.user_id')
        ->join('odd_jobs', 'odd_applieds.applied_for_job_id', '=', 'odd_jobs.odd_id')
        ->select('odd_applieds.*', 'user_info.*','odd_jobs.odd_id', 'odd_jobs.title','odd_jobs.user_id')
        ->get();


        return view('jobs.oddapplied', [
          'applied'=>$applied,

        ]);
      }
      public function oddwhereiapplied()
      {
        $applied = DB::table('odd_applieds')
        ->join('odd_jobs', 'odd_applieds.applied_for_job_id', '=', 'odd_jobs.odd_id')
        ->join('users', 'odd_jobs.user_id','=','users.id')
        ->select('odd_applieds.*','odd_jobs.title','odd_jobs.odd_id', 'users.name')
        ->get();


        return view('student.oddwhereiapplied', [
          'applied'=>$applied,
        ]);

      }

      public function destroy($id)
      {
        $jobs = OddJobs::where('odd_id','=',$id);

        $jobs->delete();


        return redirect('/postedjobs');

    }
}
