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

Route::get('/admin', function () {
    return view('login');
});

Route::get('/', function () {
    return view('home');
});

Route::get('login', 'LoginController@getLogin')->name('login');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@getLogout');
Route::get('/','LoginController@getHome');
Route::get('aboutus','LoginController@getAboutus');
Route::get('contactus','LoginController@getContactus');






// Route::group(['middleware' => ['auth']], function () {
//  Route::get('admin', function () {
    	
//         return view('admin.dashboard');
//     });

// });   