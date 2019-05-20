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


	Route::get('/missions', 'MissionController@showMissionPage');
	Route::get('/missions/create', 'MissionController@showCreateMissionPage');
	Route::post('/missions/create', 'MissionController@createMission');
	Route::get('/missions/delete/{missionId}', 'MissionController@deleteMission');
	Route::get('/missions/reactive/{missionId}', 'MissionController@reactiveMission');
	Route::get('/missions/detail/{missionId}', 'MissionController@showMissionDetailPage');
	Route::post('/missions/skills/link/{missionId}', 'MissionController@linkSkill');
	Route::get('/missions/skills/unlink/{missionId}/{skillId}', 'MissionController@unlinkSkill');
	Route::get('/missions/search', 'MissionController@showMissionSearchPage');
	Route::post('/missions/search', 'MissionController@showMissionSearchResultPage');
	Route::get('/missions/get', 'MissionController@showGotMissionPage');
	Route::get('/missions/get/{missionId}', 'MissionController@showGetMissionPage');
	Route::get('/missions/get/{missionId}/new', 'MissionController@getMission');

	Route::get('/match', 'MissionController@matchMissions');

	
});


Route::get('/initSkills', 'SettingController@initSkills');
Route::get('/test', 'SettingController@test');