<?php

Use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->users();
});

//=============== get your API KEY ===============
// Every user have API KEY for security
// If user want to get API KEY, user must login and use URL: /users/getapikey
// Program will check user have API key or not.
// If user don't have API key, program will create a new API key
//================================================

Route::post('/users/login', 'api\LoginController@checklogin')->name('user-login');
Route::post('/users/logout', 'api\LoginController@logout')->name('user-logout');
Route::post('/users/register', 'api\LoginController@register')->name('register-user');
Route::post('/users/getapikey', 'api\LoginController@getapikey')->name('get-api-key');

//=============== basic ===============
// List, create, update, delete, pagination, login

Route::resource('users', 'api\UserController');
Route::post('/users/update/{id}/{apikey}', 'api\UserController@update')->name('update-user');
Route::get('/users/detail/{id}/{apikey}', 'api\UserController@detail')->name('detail-user');
Route::delete('/users/delete/{id}/{apikey}', 'api\UserController@destroy')->name('delete-user');

Route::get('/list-users/all/{apikey}', 'api\UserController@alluser')->name('list-user-all'); // Get all user
Route::get('/list-users/{page}/{apikey}', 'api\UserController@pagination')->name('list-user-paginate'); // Pagination have page number. 20 items each page

//=============== get team leader and team member ===============

Route::get('/team/leader/{idTeam}/{apikey}', 'api\TeamController@searchTeamLeader');
Route::get('/team/member/{idTeam}/{apikey}', 'api\TeamController@searchTeamMember');

//=============== get CEO ===============

Route::get('/ceo/{apikey}', 'api\CEOController@searchCEO');
