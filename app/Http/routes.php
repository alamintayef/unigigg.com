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
Route::get('email','EmailController@welcomeEmail');

Route::get('emailview', function()
{
   return view('email.welcomeemail');
});

Route::get('auto', function()
{
   return view('sms');
});

Route::get('/jobs/view','PublicController@publicboard');
Route::get('/jobs/view/eccentric','PublicController@publiceccentricboard');
Route::get('/sms', 'PublicController@sendsms');

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
      Route::get('/jobs/view','PublicController@publicboard');

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



        //admin
      Route::get('admin','AdminController@index');
      Route::post('university', 'AdminController@unistore');
      Route::get('area', 'AdminController@getarea');
      Route::post('area', 'AdminController@areastore');
      Route::get('/aprofile/{id}', 'AdminController@studentemview');
      Route::get('verification', 'AdminController@verification');
      Route::get('employerlist', 'AdminController@employer');
      Route::get('call/for/in', 'AdminController@callforinterview');
      Route::post('verify/{id}', 'AdminController@verify');
      Route::get('managejobs','AdminController@managejobs');
      Route::get('manage/odd/jobs','AdminController@manageoddjobs');


      //payment
      Route::get('payment','BillController@index');
      Route::post('payment/store/bkash','BillController@store');
      Route::post('payment/call/for/interview','BillController@employerreqstore');

      Route::get('/employer/login','EmployerController@login');

      //Registration
      Route::get('employer/register', 'EmployerController@register');

  //EmployerInfo
      Route::get('/employer', 'EmployerController@index');
      Route::get('/employerinfo', 'EmployerInfoController@index');
      Route::post('/employerinfo', 'EmployerInfoController@store');
  //Post Jobs
      Route::get('/postjobs', 'EmployerController@postjobs');
      Route::post('/postjobs', 'JobsController@store');
      Route::post('postjobs/{id}','JobsController@destroy');
      Route::get('/postedjobs', 'JobsController@show');
  //Jobs
      Route::get('/jobs', 'JobsController@jobboard');
      Route::get('/chakri', 'ChakriController@chakriboard');
      Route::get('/show/ejobs/{id}','JobsController@showjobs');

  //Chakri
      Route::get('/internships', 'ChakriController@internships');
      Route::get('/fulltime', 'ChakriController@fulltime');
      Route::get('/parttime', 'ChakriController@parttime');
      Route::get('/onetime', 'ChakriController@onetime');
  //show who applied
      Route::get('/whoapplied', 'ApplyController@showApplied');
  //shortlist
      Route::post('/shortlist','ShortlistController@store');
      Route::get('/shortlists','ShortlistController@shortlistview');
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
      Route::post('eccentric/jobs/whoapplied/delete', 'OddJobsController@destroy');
      Route::get('postedoddjobs','OddJobsController@postedones');
      Route::post('deleteoddjobs/{id}','OddJobsController@destroy');

      //eccentricJobs shortlists

      Route::post('/eccentric/shortlist','OddShortlistController@store');

      //EccentricJobs Classification
      Route::get('eccentricJobs','OddJobsController@index');
      Route::get('tuitions','OddJobsController@tuitions');
      Route::get('assignements','OddJobsController@assignements');
      Route::get('others','OddJobsController@others');


      //call for interview
      Route::get('call','ShortlistController@callforinterview');


});

Route::group(['middleware' => 'web'], function () {
      Route::auth();

      Route::get('/home', 'HomeController@index');
      Route::get('/pdf','DataController@createPdf');
  //userinfo
      Route::get('/userinfo', 'UserInfoController@create');
      Route::post('/userstore', 'UserInfoController@store');
    //  Route::get('/userupdate/{id}', 'UserInfoController@update');
      Route::post('/userupdate/{id}', 'UserInfoController@update');
      Route::get('/vdoprofile','UserInfoController@vprofileshow');
      Route::post('/vdostore','UserInfoController@vprofilestore');
  //skills
      Route::get('/skill', 'SkillController@index');
      Route::post('/skillstore', 'SkillController@store');
      Route::post('/skill/{id}','SkillController@destroy');
      Route::post('/skills/{id}','SkillController@add_skill_proof');

  //interest
      Route::post('/intereststore', 'InterestController@store');
      Route::post('/interest/{id}','InterestController@destroy');
      Route::get('/interest', 'InterestController@index');
      //hobby
      Route::post('/hobbystore', 'HobbyController@store');
      Route::post('/hobby/{id}','HobbyController@destroy');
      Route::get('/hobby', 'HobbyController@index');

  // Education
      Route::get('/edu','EducationController@index');
      Route::post('/edustore', 'EducationController@store');
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
      Route::get('/profile/{id}', 'ApplyController@studentemview');
      Route::get('/eprofile/{id}', 'ChakriController@studentemview');
      Route::get('/jobsapplied', 'StudentAppliedController@index');
      Route::get('/show/jobs/{id}','ChakriController@showjobs');

  // jobsapplied

      Route::get('/eccentricJobsiApplied', 'OddJobsController@oddwhereiapplied');
      Route::post('/remove/application/{id}', 'StudentAppliedController@destroy');
});
