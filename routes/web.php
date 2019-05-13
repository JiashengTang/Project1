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

Route::get('/login', function () {
	return view('user.login');
});
Route::post('/login', 'UserController@userLogin');
Route::get('/register', function () {
    return view('user.register');
});
Route::post('/register', 'UserController@userRegister');

Route::group(['middleware' => ['web','login','auth']], function () {
	
	Route::get('/', 'UserController@showHomePage');
	Route::get('/home', 'UserController@showHomePage');
	Route::get('/logout', 'UserController@userLogOut');


	Route::get('/skills', 'UserController@showSkillPage');
	Route::post('/skills/add', 'UserController@addSkill');
	Route::get('/skills/delete/{skillId}', 'UserController@deleteSkill');


	Route::get('/missions', 'UserController@showMissionPage');
	Route::get('/missions/create', 'UserController@showCreateMissionPage');
	Route::post('/missions/create', 'UserController@createMission');
	Route::get('/missions/delete/{missionId}', 'UserController@deleteMission');
	Route::get('/missions/reactive/{missionId}', 'UserController@reactiveMission');
	Route::get('/missions/detail/{missionId}', 'UserController@showMissionDetailPage');
	Route::post('/missions/skills/link/{missionId}', 'UserController@linkSkill');
	Route::get('/missions/skills/unlink/{missionId}/{skillId}', 'UserController@unlinkSkill');

	Route::get('/missions/search', 'UserController@showMissionSearchPage');
	Route::post('/missions/search', 'UserController@showMissionSearchResultPage');


	Route::get('/missions/get', 'UserController@showGotMissionPage');
	Route::get('/missions/get/{missionId}', 'UserController@showGetMissionPage');
	Route::get('/missions/get/{missionId}/new', 'UserController@getMission');


	Route::get('/match', 'MatchController@matchMissions');

	
});


Route::get('/initSkills', 'SettingController@initSkills');
Route::get('/test', 'SettingController@test');