<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Model\Student\UserInfo;
    use App\Model\Student\Vprofile;
    use App\Model\Student\User;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use DB;
    use Slack;
    class UserInfoController extends Controller
    {
      //
      public function __construct()
      {
        $this->middleware('auth');
      }

      public function create()
      {

        $uid= auth()->user()->id;
        $area= DB::table('areas')->select('areas.*')->orderBy('area', 'ASC')->get();
        $uni= DB::table('universities')->select('universities.*')->orderBy('university', 'ASC')->get();
        $userinfo= DB::table('user_info')->select('user_info.*')->where('user_id',$uid )->get();
        return view('student.userinfo',[
          'uni'=> $uni,
          'userinfo'=> $userinfo,
          'area' => $area,
        ]);

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

          'facebookId' => 'required|url',
          'LinkedInId' => 'url',

        ]);

        $uid= auth()->user()->id;
        $entrylimit=UserInfo::where('user_id', '=' ,$uid)->get();
        if(count($entrylimit)>0){

          $userinfo = UserInfo::where('user_id', '=' ,$uid)->first();
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
        $uid = auth()->user()->id;
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        Slack::send(''.$name.' has updated the basic info. His/Her email is '.$email.' ');
        DB::table('users')->where('id','=',$uid)->increment('profile_count');

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
      public function getYouTubeIdFromURL($url)
      {
      $url_string = parse_url($url, PHP_URL_QUERY);
      parse_str($url_string, $args);
      return isset($args['v']) ? $args['v'] : false;
      }



      public function vprofilestore(Request $request)
      {

          $this->validate($request, [
            'vdourl' => 'required',

          ]);
          $url =$request->vdourl;
          $uid = auth()->user()->id;
          $entrylimit=Vprofile::where('user_id','=' ,$uid)->get();
          if(count($entrylimit)>0)
          {
          $vprofile = Vprofile::where('user_id','=' ,$uid)->first();

          $vprofile->vdourl = $this->getYouTubeIdFromURL($url);
          $vprofile->save();

          }
          else {
            $request->user()->vprofile()->create([
              'vdourl' => $this->getYouTubeIdFromURL($url),

            ]);
          }
          $uid = auth()->user()->id;
          $name = auth()->user()->name;
          $email = auth()->user()->email;
          Slack::send(''.$name.' has added video resume. His/Her email is '.$email.' ');

          DB::table('users')->where('id','=',$uid)->increment('profile_count',30);
        //  DB::table('users')->where()increment('profile_count',30);

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

      public function Change()
      {
        return view('admin.user.passchange');
      }



      public function PrimaryInfoUpdate(Request $request)
      {

        $this->validate($request, [
          'password' => 'required|confirmed|min:8',

        ]);
        $user = auth()->user()->id;
        $pass=$request->password;
        DB::table('users')->where('id',$user)->update(['password' => bcrypt($pass)]);


        notify()->flash('Updated Successfully!', 'success', [
          'timer' => 3000,
          'text' => 'It\'s really great to see you again',
        ]);


        return redirect('/home');


      }
      public function unsubscribe($id)
      {
        DB::table('users')->where('id','=',$id)->update(['subscribe' => '1']);

        notify()->flash('Successfully Unsubscribed', 'success', [
          'timer' => 3000,
          'text' => 'It\'s really great to see you again',
        ]);
        return redirect('home');;
      }


    }
