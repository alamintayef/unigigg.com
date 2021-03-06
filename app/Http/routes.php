<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return view('welcome');

});
Route::post('form','PublicController@ajaxPost');


Route::get('events', function () {

    return view('news');
});

Route::get('/recruiter', function () {
    return view('rec');
});
Route::get('/talent', function () {
    return view('talent');
});

Route::get('/about', function () {
    return view('info.about');
});
Route::get('/faqs', function () {
    return view('faqs.faqs');
});
Route::get('/terms&services', function () {
    return view('info.term');
});
Route::get('/eccentric', function () {
    return view('eccentric');
});
Route::get('email','EmailController@welcomeEmail');

Route::get('emailview', function()
{
   return view('email.welcomeemail');
});
Route::get('coming/soon', function()
{
   return view('coming');
});

Route::get('auto', function()
{
   return view('sms');
});

//vlog
Route::get('/vlog', 'PublicController@showVlog');
Route::get('/interview', function(){
   return view('vlog.interview');
});
Route::get('/github', function(){
   return view('vlog.github');
});


    Route::get('/jobs/view','PublicController@publicboard');
    Route::get('/jobs/view/eccentric','PublicController@publiceccentricboard');
    Route::get('/view/jobs/{slug}','PublicController@showjobs');
    Route::get('/view/odd/jobs/{title}','PublicController@showEccentricJobs');
    Route::get('/sms', 'PublicController@sendsms');
    Route::get('profile/{useremail}','PublicController@viewme');
    Route::get('profile/template/{useremail}','PublicController@viewmetwo');
    Route::get('blogs', 'PublicController@showBlogs');
    Route::get('blog/article/{slug}','PublicController@showBlog');
    Route::get('search/people','PublicController@search');
    Route::get('search/jobs','PublicController@chakrisearch');
    Route::get('/competitions', 'PublicController@Competitionshow');
    Route::get('/trainings', 'PublicController@Trainingshow');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
      //
      //facebook


      Route::get('/redirect', 'SocialAuthController@redirect');
      Route::get('/callback', 'SocialAuthController@callback');

      Route::get('/view/jobs/{slug}','PublicController@showjobs');
      Route::get('/view/odd/jobs/{title}','PublicController@showEccentricJobs');
      Route::get('blogs','PublicController@showBlogs');
      Route::get('blog/article/{slug}','PublicController@showBlog');
      Route::get('/jobs/view','PublicController@publicboard');
      Route::get('/vlog','PublicController@showVlog');
      Route::get('/jobs/view/eccentric','PublicController@publiceccentricboard');

      Route::get('coming/soon', function()
      {
         return view('coming');
      });

      Route::get('/', function () {

          return view('welcome');
      });
      Route::get('/recruiter', function () {
          return view('rec');
      });
      Route::get('/talent', function () {
          return view('talent');
      });
      Route::get('/about', function () {
          return view('info.about');
      });
      Route::get('/terms&services', function () {
          return view('info.term');
      });
      Route::get('/eccentric', function () {
          return view('eccentric');
      });
      Route::get('/faqs', function () {
          return view('faqs.faqs');
      });
      Route::get('/github', function(){
         return view('vlog.github');
      });


      //admin
      Route::get('admin','AdminController@index');
      Route::post('update/employer/subscripton/{id}','AdminController@updateSub');

      //addvdo
      Route::get('addvdo','AdminController@addvlogvdo');
      Route::post('add/vdo', 'AdminController@vlogvdostore');
      // add university
      Route::post('university', 'AdminController@unistore');
      Route::get('adduniversity', 'AdminController@adduni');
      //add area
      Route::get('area', 'AdminController@getarea');
      Route::post('area', 'AdminController@areastore');

      // view Profile
      Route::get('/aprofile/{id}', 'AdminController@studentadminview');
      Route::get('/employer/profile/{id}','AdminController@employerview');
      Route::get('verification', 'AdminController@verification');
      Route::get('employerlist', 'AdminController@employer');

      //call for interview by admin
      Route::get('call/for/in', 'AdminController@ShowInterviewRequest');
      Route::post('call/for/interview/{id}', 'AdminController@callallforinterview');

      //verify
      Route::post('verify/{id}', 'AdminController@verify');
      Route::post('verify/employer/{id}', 'AdminController@employerverify');
      Route::post('undo/verify/{id}', 'AdminController@undoverify');
      //managejobs
      Route::get('managejobs','AdminController@managejobs');
      Route::post('admindeletejobs/{id}','AdminController@deletejobs');
      Route::get('manage/odd/jobs','AdminController@manageoddjobs');
      Route::post('admindeleteoddjobs/{id}','AdminController@destroy');
      // admin search
      Route::get('search','AdminController@search');
      Route::get('search/manush','AdminController@searchManush');

      //add user
      Route::get('admin/create/user','AdminUserController@index');
      Route::post('admin/create/user','AdminUserController@createUser');
      //Delete user
      Route::post('admin/delete/user/{id}', 'AdminUserController@deleleUser');
      //notify user
      Route::post('notify/user/education/{email}','AdminUserController@notifyuserEducation');
      Route::post('notify/user/experience/{email}','AdminUserController@notifyuserExperience');
      Route::post('notify/user/about/{email}','AdminUserController@notifyuserAbout');
      Route::post('notify/user/info/{email}','AdminUserController@notifyuserInfo');
      Route::post('notify/user/skill/{email}','AdminUserController@notifyuserSkill');
      //jobboard
      Route::get('/admin/job/board','AdminController@jobview');
      Route::post('/admin/status/activate/{id}','AdminController@activate');
      Route::post('/admin/status/inactivate/{id}','AdminController@inactivate');

      //blogboard
      Route::get('/admin/blog/board','AdminController@blogview');
      Route::post('/admin/blog/status/activate/{id}','AdminController@activateblog');

      //passchange
      Route::get('change/password','UserInfoController@Change');
      Route::post('change/user/password','UserInfoController@PrimaryInfoUpdate');

      //Admin Email

      Route::get('Admin/Email','AdminController@AdminEmail');
      Route::post('admin/email/send', 'AdminController@PostAdminEmail');

      // admin end ---------------------------------------------------

      //sub admin

      Route::get('admin','AdminController@index');



      //competition
      Route::get('add/competition','CompetitionController@index');
      Route::post('add/competition/create','CompetitionController@store');
      Route::get('/competitions', 'PublicController@Competitionshow');


      //trainings
      Route::get('add/training','TrainingController@index');
      Route::post('add/training/create','TrainingController@store');
      Route::get('/trainings', 'PublicController@Trainingshow');

      //Appointment
      Route::get('setappointment/{id}','BillController@appointment');

      //payment
      Route::get('payment','BillController@index');
      Route::post('payment/store/bkash','BillController@store');
      Route::post('payment/call/for/interview','BillController@employerreqstore');

      Route::get('verify/me','BillController@verifyme');

      Route::get('/employer/login','EmployerController@login');

      //Registration
      Route::get('employer/register', 'EmployerController@register');

  //EmployerInfo
      Route::get('/employer', 'EmployerController@index');
      Route::get('/employerinfo', 'EmployerInfoController@index');
      Route::post('/employerinfo', 'EmployerInfoController@store');
  //Post Jobs
      Route::get('/postjobs', 'JobsController@postjobs');
      Route::post('create/job/post', 'JobsController@store');
      Route::get('/postjobs/update/view/{id}','JobsController@updateview');
      Route::post('/postjobs/update/{id}', 'JobsController@update');
      Route::post('deletejobs/{id}','JobsController@destroy');
      Route::get('/postedjobs', 'JobsController@show');
      Route::get('/view/applied', [ 'as'=>'viewapplied','uses'=>'JobsController@Applicationshow']);
  //Jobs
      Route::get('/jobs', 'JobsController@jobboard');
      Route::get('/chakri', 'ChakriController@chakriboard');
      Route::get('search/charki', 'ChakriController@chakrisearch');
      Route::get('/show/ejobs/{id}','JobsController@showjobs');

  // Talent Profile
    Route::get('talent/profile/paid/{id}', 'EmployerController@studentemview');
  //Chakri
      Route::get('/internships', 'ChakriController@internships');
      Route::get('/fulltime', 'ChakriController@fulltime');
      Route::get('/parttime', 'ChakriController@parttime');
      Route::get('/onetime', 'ChakriController@onetime');
  //show who applied
      Route::get('/whoapplied/{id}', ['as'=>'whoapplied','uses'=> 'ApplyController@showApplied']);
      Route::post('/remove/applied/{id}','ApplyController@removeApplication');
  //shortlist
      Route::post('/shortlist','ShortlistController@store');
      Route::get('/shortlists/{id}',['as'=>'shortlists', 'uses'=> 'ShortlistController@shortlistview']);
    //  Route::get('states/{id}/regions/{capital}', ['as' => 'regions', 'uses' => 'RegionController@index'])
      Route::post('/shortlist/{id}','ShortlistController@destroy');

  //Finalize
      Route::post('/finalize/{id}','ShortlistController@finalize');
      //
      //EccentricJobs
      Route::get('eccentricJobspostem','OddJobsController@empostjobs');
      Route::get('eccentricJobs','OddJobsController@index');
      Route::get('eccentricJobspost','OddJobsController@postjobs');
      Route::post('eccentricJobspost','OddJobsController@postjob');

      Route::get('eccentric/jobs/whoapplied', 'OddJobsController@whoapplied');
      Route::post('eccentricjobswhoapplieddelete/{id}', 'OddJobsController@whoapplieddelete');
      Route::get('postedoddjobs','OddJobsController@postedones');
      Route::post('deleteoddjobs/{id}','OddJobsController@destroy');

      //eccentricJobs shortlists

      Route::post('/eccentric/shortlist','OddShortlistController@store');

      //EccentricJobs Classification
      Route::get('eccentricJobs','OddJobsController@index');
      Route::get('searcharea','SearchController@searcharea');
      Route::get('searchtuition','SearchController@searchtuition');
      Route::get('tuitions','OddJobsController@tuitions');
      Route::get('searchassignment','SearchController@searchassignment');
      Route::get('assignements','OddJobsController@assignements');
      Route::get('searchother','SearchController@searchassignment');
      Route::get('others','OddJobsController@others');


      //call for interview
      Route::get('call','ShortlistController@callforinterview');
      Route::post('callthem/{id}','EmployerController@callforinterview');
      Route::post('callthem/all/{id}','EmployerController@callforinterviewall');
      Route::get('callforodd/{id}','OddJobsController@callforodd');


});

Route::group(['middleware' => 'web'], function () {
      Route::auth();

      Route::get('/home', 'HomeController@index');
      Route::get('/pdf','DataController@createPdf');
  //userinfo
      Route::get('/userinfo', 'UserInfoController@create');
      Route::post('/userstore', 'UserInfoController@store');
      Route::post('/unsubscribe/{id}', 'UserInfoController@unsubscribe');
    //  Route::get('/userupdate/{id}', 'UserInfoController@update');
      Route::post('/userupdate/{id}', 'UserInfoController@update');
      Route::get('/vdoprofile','UserInfoController@vprofileshow');
      Route::post('/vdostore','UserInfoController@vprofilestore');
  //skills
    //  Route::get('/skill', 'SkillController@view');
      Route::get('/skill', 'SkillController@index');
      Route::post('/skillstore', 'SkillController@store');
      Route::post('/skill/delete/{id}','SkillController@destroy');
      //Route::post('/skills/{id}','SkillController@add_skill_proof');

  //interest
      Route::post('/interest/store', 'InterestController@store');
      Route::post('/interest/{id}','InterestController@destroy');
      Route::get('/interest', 'InterestController@index');
      //hobby
      Route::get('/ajax/get', 'HobbyController@ajaxGet');
      Route::get('hobby','HobbyController@hobbyview');
      Route::post('hobby', 'HobbyController@store');
    //  Route::post('/hobby/{id}','HobbyController@destroy');
      Route::get('/hobbyview', 'HobbyController@index');



  // Education
      Route::get('/edu','EducationController@index');
      Route::post('/edustore', 'EducationController@store');
      Route::get('/edupdate/{id}','EducationController@updateview');
      Route::post('/edupdate/{id}','EducationController@update');
      Route::post('/edudel/{id}','EducationController@destroy');
  //Image
      Route::post('/imagestore', 'ImageController@store');
      Route::get('/image', 'ImageController@index');
  //Reference
      Route::post('/refstore','RefController@store');
      Route::post('/refdelete/{id}','RefController@destroy');
      Route::get('/refs', 'RefController@index');
  // experience
    //  Route::get('/experience','ExperienceController@view');
      Route::post('/experiencestore', 'ExperienceController@store');
      Route::post('/experience/{id}','ExperienceController@destroy');
      Route::get('/experience','ExperienceController@index');
  //extra
      Route::post('/exccstore', 'ExtraCurController@store');
      Route::post('/excc/{id}','ExtraCurController@destroy');
      Route::get('/excc','ExtraCurController@index');
  //fun
      Route::post('/funstore', 'FunFactsController@store');
      Route::get('/fun','FunFactsController@index');
  //Job Application
      Route::post('/apply', 'ChakriController@store');
      Route::post('/apply/eccentric', 'OddAppliedController@store');

  //shows talent profile
      Route::get('talent/profile/{id}', 'ApplyController@studentemview');
      Route::get('talent/profile/eccentric/{id}', 'OddAppliedController@studentemview');
      Route::get('/eprofile/{id}', 'ChakriController@studentemview');
      Route::get('/jobsapplied', 'StudentAppliedController@index');
      Route::get('/show/jobs/{id}','ChakriController@showjobs');

  // jobsapplied

      Route::get('/eccentricJobsiApplied', 'OddJobsController@oddwhereiapplied');
      Route::post('/remove/application/{id}', 'StudentAppliedController@destroy');


  //blog
      Route::get('blog/post', 'BlogController@index');
      Route::post('blog/post/create', 'BlogController@store');
      Route::get('blog', 'PublicController@showBlog');
      Route::get('blog/edit/{id}','BlogController@edit');
      Route::post('blog/update/{id}','BlogController@update');
  //feedback
      Route::post('feedback','UserInfoController@feedback');
  //

  //
  Route::get('/github', function(){
     return view('vlog.github');
  });

});
