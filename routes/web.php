<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/','PagesController@home');

Route::resource('officer', 'OfficersController');
Route::get('/addofficer','OfficersController@create');
Route::get('/editofficer/{officer}','OfficersController@edit');
// Route::patch('/officer/{officer}','OfficersController@update');
// Route::delete('/officer/{officer}', 'OfficersController@destroy');
Route::resource('/masyarakat', 'MembersController');
Route::get('/addmember', 'MembersController@create');
Route::get('/editmember/{masyarakat}', 'MembersController@edit');
// Route::patch('/masyarakat/{masyarakat}', 'MembersController@update');
// Route::delete('/masyarakat/{masyarakat}', 'MembersController@destroy');
Route::resource('/reports', 'AreportsController');
Route::resource('/report', 'ReportsController');
Route::get('/addreport','ReportsController@create');
Route::delete('/report/{report}','ReportsController@destroy');
Route::get('/laporan-pdf/{report}','ReportsController@pdf');
Route::resource('/aspiration', 'AspirationsController');
Route::get('/addaspiration','AspirationsController@create');
Route::delete('/aspiration/{aspiration}','AspirationsController@destroy');
Route::get('/laporanpdf/{aspiration}','AspirationsController@pdf');
Route::resource('/timeline', 'TimelineController');
Route::get('/addtimeline', 'TimelineController@create');
// Route::delete('/timeline/{timeline}, TimelineController@destroy');
Route::resource('/addmember','AddmemberController');
Route::get('/addmembernik','AddmemberController@create');
Route::get('/membernik','AddmemberController@member');
Auth::routes();
Route::get('/home', 'HomeController@index');
// Route::get('/homeofficer', 'HomeController@homeofficer');
// Route::get('/homemember', 'HomeController@homemember');

// Route::group(['prefix' => 'admin'], function () {
    
//     Route::get('/home', 'Auth\AdminController@index')->name('admin.login');
    
//     //Login routes
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

//     //Logout route
//     Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

//     //Register routes
//     Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
//     Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
// });
