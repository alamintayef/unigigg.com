<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Model\Student\UserInfo;
    use App\Model\Student\Vprofile;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use DB;
    class UserInfoController extends Controller
    {
      //
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function create()
      {


        $uni= DB::table('universities')->select('universities.*')->orderBy('university', 'ASC')->get();
        return view('student.userinfo',['uni'=> $uni]);

      }
      public function store(Request $request)
      {
        $this->validate($request, [
          'fname' => 'required|max:255|min:4',
          'lname' => 'required|max:255|min:4',
          'area' =>'required',
          'post_code' => 'required|max:4|min:4',
          'other'=>'max:255',
          'institute' => 'required|max:255|min:10',
          'passing_date' => 'required|date',
          'mobile' => 'required|max:14|min:11',
          'universityId' => 'required|max:20',
          'NId' => 'max:17|min:13',
          'facebookId' => 'required|url',
          'LinkedInId' => 'url',

        ]);

        $uid= auth()->user()->id;
        $entrylimit=UserInfo::where('user_id', '=' , $uid)->get();
        if(count($entrylimit)>0){

          $userinfo = UserInfo::where('user_id', '=' , $uid)->first();
          $userinfo->fname = $request->fname;
          $userinfo->lname = $request->lname;
          $userinfo->area = $request->area;
          $userinfo->post_code = $request->post_code;
          $userinfo->other = $request->other;
          $userinfo->institute = $request->institute;
          $userinfo->passing_date = $request->passing_date;
          $userinfo->mobile = $request->mobile;
          $userinfo->universityId = $request->universityId;
          $userinfo->NId = $request->NId;
          $userinfo->facebookId = $request->facebookId;
          $userinfo->LinkedInId = $request->LinkedInId;

          $userinfo->save();

        }
        else {

        $request->user()->userinfo()->create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'area' => $request->area,
            'post_code' => $request->post_code,
            'other' => $request->other,
            'institute' => $request->institute,
            'passing_date' => $request->passing_date,
            'mobile' => $request->mobile,
            'universityId' => $request->universityId,
            'NId' => $request->NId,
            'facebookId' => $request->facebookId,
            'LinkedInId' => $request->LinkedInId,

          ]);
        }

        notify()->flash('Added Successfully! Go to Dashboard', 'success', [
           'timer' => 3000,
           'text' => 'Basic Information Done ! Congrats',
         ]);

          return redirect('userinfo');
      }

      public function edit($id)
      {
        return view('student.partials.update.userinfoupdate');
      }


      public function update(Request $request,$id)
      {
        $this->validate($request, [
          'fname' => 'required|max:255|min:4',
          'lname' => 'required|max:255|min:4',
          'area' =>'required',
          'post_code' => 'required|max:4|min:4',
          //'other'=>'max:255',
          'institute' => 'required|max:255|min:10',
          'passing_date' => 'required|date',
          'mobile' => 'required|max:14|min:11',
          'universityId' => 'required|max:20',
          'NId' => 'max:17|min:13',
          'facebookId' => 'required|url',
          'LinkedInId' => 'url',
          'youtube'=> 'max:255'
        ]);

        $userinfo = UserInfo::findorFail($id);
        $userinfo->fname = $request->fname;
        $userinfo->lname = $request->lname;
        $userinfo->area = $request->area;
        $userinfo->post_code = $request->post_code;
        $userinfo->other = $request->other;
        $userinfo->institute = $request->institute;
        $userinfo->passing_date = $request->passing_date;
        $userinfo->mobile = $request->mobile;
        $userinfo->universityId = $request->universityId;
        $userinfo->NId = $request->NId;
        $userinfo->facebookId = $request->facebookId;
        $userinfo->LinkedInId = $request->LinkedInId;
        $userinfo->youtube = $request->youtube;
        $userinfo->save();
        return redirect('home');

      }

      public function vprofilestore(Request $request)
      {


          $this->validate($request, [
            'vdourl' => 'required',

          ]);
          $uid= auth()->user()->id;
          $entrylimit=Vprofile::where('user_id','=' ,$uid)->get();
          if(count($entrylimit)>0)
          {
          $vprofile = Vprofile::findorFail($uid);
          $vprofile->vdourl = $request->vdourl;
          }
          else {
            $request->user()->vprofile()->create([
              'vdourl' => $request->vdourl,

            ]);
          }

          notify()->flash('Added Successfully!', 'success', [
            'timer' => 3000,
            'text' => 'It\'s really great to see you again',
          ]);


          return redirect('/home');

        }

      public function vprofileshow()
      {
        return view('student.vprofileview');
      }


    }
