<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/intro', array('as'=>'intro', function()
{
  return View::make('intro');
}));
Route::get('/projlist', array('before' => 'auth','as' => 'projlist', function() {
  return View::make('projlist')->with('projects', Project::all());
}));

Route::get('/index', array('uses'=> 'IndexController@index', 'as'=> 'indexpage'));
Route::get('/registerSuccess',function() { return View::make('registerSuccess');
});
Route::get('/login', array('uses' => 'AshasController@login','as' => 'loginpage'));
Route::post('/login', array('uses' => 'AshasController@user','as' => 'profilepage'));
Route::get('/register', array('uses' => 'AshasController@register','as' => 'asharegistration'));
Route::post('/register', array('uses' => 'AshasController@store','as' => 'submitpage'));
Route::get('/svv', array('uses' => 'AshasController@svv','as' => 'svvregistration'));
Route::post('/svv', array('uses'=> 'AshasController@store', 'as' => 'svvsubmitpage'));


Route::get('/viewlists', array('before' => 'auth','as' => 'viewlists', function()
{
	return View::make('viewlists');
}));

Route::get('/svprojlist', array('as' => 'svprojlist', function() {
 return View::make('svprojlist');
}));
//Route::post('svprojlist', array('as'=> 'svprojlist', 'uses' => 'PendsvController@svprojlist'));

Route::get('/vollist', array('before' => 'auth','as' => 'vollist', 'uses' => 'VolunteersController@getIndex'));

Route::get('/sitevisitvollist', array('before' => 'auth','as' => 'sitevisitvollist', 'uses' => 'VolunteersController@getIndex'));

Route::get('/viewvolrequests', array('before' => 'auth','as' => 'viewvolrequests', 'uses' => 'PendVolunteersController@getIndex'));

Route::post('/vollistpost', array('before' => 'auth','as' => 'vollistpost', 'uses' => 'VolunteersController@postIndex'));
Route::get('/volscout', array('uses' => 'AshasController@volscout','as' => 'home'));
//Route::get('/admin', array('before' => 'validateLoginStatus','as' => 'adminpage','uses' => 'PendVolunteersController@getIndex' ));
Route::get('/admin', array('before' => 'auth','as' => 'adminpage','uses' => 'PendVolunteersController@getIndex' ));

Route::post('/', array('before' => 'auth','as' => 'entry.add','uses' => 'ProjectsController@postProjects'));
Route::get('/svv', array('uses' => 'AshasController@svv','as' => 'svvregistration'));
//Route::get('/logout', array('as' => 'logout', function() {  Auth::logout();  
//  return Redirect::guest('login');
//}));
Route::get('Admin','CoordinatorController@AddStates');

Route::post('Admin', array('as' => 'state.post',
  'uses' =>'CoordinatorController@postStates'));


Route::get('Admin2','CoordinatorController@DisplayProjects');

Route::post('Admin2', array('as' => 'project.post',
  'uses' =>'CoordinatorController@AddProjects'));

Route::get('pendsvlist', array('as'=>'pendsvlist', 'uses'=>'PendsvController@pendsvlist'));

//Route::post('pendsvlist', array('as'=>'pendsvlist', 'uses'=>'PendsvController@getIndex'));

//Route::get('svlist', array('as'=>'svlist', 'uses'=> 'PendsvController@getIndex'));

Route::get('voldetail', array('as' => 'voldetail', function(){
return View::make('voldetail');
}));
Route::get('voldetail', array('as' =>'voldetail', 'uses'=>'PendsvController@voldetail'));
Route::get('svlist', array('before' => 'auth', 'as'=>'svlist', 'uses'=> 'PendsvController@getIndex'));
Route::get('svdecline', array('before' => 'auth', 'as' => 'svdecline', 'uses' => 'PendsvController@svdecline'));
//Route::get('svlist', array('as'=>'svlist', 'uses'=> 'PendsvController@getIndex'));
Route::get('svprojlist', array('as'=> 'svprojlist', 'uses' => 'PendsvController@svprojlist'));
//--------------------------------------------------------------------------
Route::get('Admin2/thanks', array('as' => 'thanks.display', 
  'uses'=>  'CoordinatorController@getThanks'));
Route::get('home', array('as' => 'SV.home',
     'uses'=>'ProjectsController@getIndex'));

Route::get('projects/{sid}',
      array('before' => 'auth','as'=> 'display_projects_per_state',
          'uses'=>'ProjectsController@getProjects'));

Route::post('/', 
      array('before' => 'auth','as' => 'entry.add',
          'uses' => 'ProjectsController@postProjects'));
//--------------------------------------------------------------
Route::get('/logout', array('as' => 'logout', function() {
  Auth::logout();
  Session::forget('loginStatus');
 return Redirect::guest('login');
}));
