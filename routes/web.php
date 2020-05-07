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

Route::get('/', function () {
    return view('welcome');
});

//   Auth::routes();
//Auth::Routes(['register'=>False]);
Route::get('loginVijay', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('loginVijay', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware'=>'userauth','as'=>'userauth.'],function(){
Route::resource('/trackerSubmit','Tracker');
Route::resource('/comp','CompanyMasterController');


});
Route::group(['middleware'=>'adminauth','as'=>'adminauth.'],function(){
  Route::resource('/trackerSecond','SecondTrackerMaster');
 Route::get('/sortedData','SecondTrackerMaster@sortForm');
 Route::post('/sortedData2','SecondTrackerMaster@sortFormSearch');
 Route::get('/sortedDataView','SecondTrackerMaster@myview');
  Route::get('/datatable','SecondTrackerMaster@datatable');
  Route::get('/userData','SecondTrackerMaster@userDataFetch');
  // Registration Routes...
  Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\RegisterController@register');
//Route::get('/userData2','SecondTrackerMaster@search');

  //Auth::routes();
//   Route::get('auth/register', ['middleware'=>'adminauth', 'uses'=>'Auth\AuthController@getRegister']);
// Route::post('auth/register', ['middleware'=>'adminauth', 'uses'=>'Auth\AuthController@postRegister']);
});
