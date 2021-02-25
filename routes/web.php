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

Route::get('/', function () {
   return view('welcome');
});

//Route::get('/login', function () {
//    return view('login');
//});


Auth::routes();


Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('dashboard');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@admin')->name('admin')->middleware('admin');
Route::get('/customer', 'HomeController@customer')->name('customer')->middleware('customer');
Route::get('/psrequests/my/{type?}', 'HomeController@psRequests')->name('psRequests')->middleware('admin');
Route::get('/psrequests/my/clients/', 'HomeController@psRequests')->name('psRequests.clients')->middleware('admin');
Route::post('/psrequests/my/update-status/{id}', 'HomeController@updateStatus')->name('update.status')->middleware('admin');
Route::get('/psrequests/my/delete-status/{id}', 'HomeController@deleteStatus')->name('delete.status')->middleware('admin');
Route::post('/create-cloud-path/', 'HomeController@createCloudPath')->name('create.cloud')->middleware('admin');
Route::post('/upload-file-in-directory/', 'HomeController@uploadFileInDirectory')->name('upload.in.directory')->middleware('admin');

//Route::get('/admin', 'HomeController@admin')->name('admin')->middleware('admin');
//Route::get('/checkAuth', 'HomeController@checkAuth')->name('checkAuth');
//Route::get('/', 'HomeController@admin')->name('admin.dashboard')->middleware('admin');
//Route::get('/', 'HomeController@user')->name('user.dashboard')->middleware('auth');
//Route::group(['as'=>'user.','prefix' => 'user','namespace'=>'User','middleware'=>['auth','user']], function () {
//    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
//});
