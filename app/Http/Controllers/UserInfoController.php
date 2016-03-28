<?php
namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Model\Student\UserInfo;
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
              'youtube' => $request->youtube,
            ]);

            return redirect('home');
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


    }
