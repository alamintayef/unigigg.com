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

      Route::get('admin','AdminController@index');
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
      Route::get('eccentricJobsApplied', 'OddJobsController@whoapplied');
      Route::get('eccentricJobsAppliedem', 'JobsController@oddwhoapplied');


});

Route::group(['middleware' => 'web'], function () {
      Route::auth();

      Route::get('/home', 'HomeController@index');
      Route::post('/pdf/{user_id}','CVController@createPdf');
  //userinfo
      Route::get('/userinfo', 'UserInfoController@create');
      Route::post('/userstore', 'UserInfoController@store');
    //  Route::get('/userupdate/{id}', 'UserInfoController@update');
      Route::post('/userupdate/{id}', 'UserInfoController@update');
  //skills
      Route::post('/skillstore', 'SkillController@store');
      Route::post('/skill/{id}','SkillController@destroy');
      Route::post('/skills/{id}','SkillController@add_skill_proof');

  //interest
      Route::post('/intereststore', 'InterestController@store');
      Route::post('/interest/{id}','InterestController@destroy');

      Route::post('/hobbystore', 'HobbyController@store');
      Route::post('/hobby/{id}','HobbyController@destroy');

  // Education
      Route::post('/edustore', 'EducationController@store');

      Route::post('/edupdate/{id}','EducationController@update');
      Route::post('/edudel/{id}','EducationController@destroy');
  //Image
      Route::post('/imagestore', 'ImageController@store');
  //Reference
      Route::post('/refstore','RefController@store');
      Route::post('/refdelete/{id}','RefController@destroy');
  // experience
      Route::post('/experiencestore', 'ExperienceController@store');
      Route::post('/experience/{id}','ExperienceController@destroy');
  //extra
      Route::post('/exccstore', 'ExtraCurController@store');
      Route::post('/excc/{id}','ExtraCurController@destroy');

      Route::post('/funstore', 'FunFactsController@store');
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
      Route::post('/removeapplication/{id}', 'StudentAppliedController@destroy');
});
