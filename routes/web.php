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

Route::get('admin/dashboard',['as'=>'admin.dashboard','uses'=>'Admin\DashboardController@index']);
Route::get('admin/test',['as'=>'admin.test','uses'=>'Admin\DashboardController@test']);
Route::get('admin/user',['as'=>'admin.user','uses'=>'Admin\UserController@index']);
Route::get('admin/user/create',['as'=>'admin.user.create','uses'=>'Admin\UserController@create']);
