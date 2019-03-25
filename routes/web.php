<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	return redirect('/login');
// });
Route::get('/login', function () {
	if (isset(\Session::get('student')[0])){
		return redirect('/home');
	}
    return view('user.login');
});
Route::get('/registe', function () {
    return view('user.registe');
});
Route::post('/login', 'UserController@userLogin');
Route::post('/registe', 'UserController@userRegiste');

Route::group(['middleware' => ['web','login']], function () {
	Route::get('/logout', 'UserController@userLogOut');
	Route::get('/home', 'UserController@showHomePage');
	Route::get('/skills', 'UserController@showSkillPage');
	Route::post('/skills/add', 'UserController@addSkill');
	Route::get('/skills/delete/{skillId}', 'UserController@deleteSkill');
	Route::get('/missions', 'UserController@showMissionPage');
	Route::get('/missions/create', 'UserController@showCreateMissionPage');
	Route::post('/missions/create', 'UserController@createMission');
	Route::get('/missions/delete/{missionId}', 'UserController@deleteMission');
	
});


Route::get('/initSkills', 'SettingController@initSkills');