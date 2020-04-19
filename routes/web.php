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

Route::group(['prefix'=>'admin/','as'=>'admin.','middleware'=>'auth'],function (){

    Route::get('dashboard',             ['as'=>'dashboard',              'uses'=>'Admin\DashboardController@index']);
    Route::get('test',                  ['as'=>'test',                   'uses'=>'Admin\DashboardController@test']);

    Route::get('user',                  ['as'=>'user',                   'uses'=>'Admin\UserController@index']);
    Route::get('user/create',           ['as'=>'user.create',            'uses'=>'Admin\UserController@create']);
    Route::post('user',                 ['as'=>'user',                   'uses'=>'Admin\UserController@store']);
    Route::get('user/edit/{id}',        ['as'=>'user.edit',              'uses'=>'Admin\UserController@edit']);
    Route::post('user/update/{id}',     ['as'=>'user.update',            'uses'=>'Admin\UserController@update']);
    Route::get('user/delete/{id}',      ['as'=>'user.delete',            'uses'=>'Admin\UserController@destroy']);

    Route::get('category',                  ['as'=>'category',                   'uses'=>'Admin\CategoryController@index']);
    Route::get('category/create',           ['as'=>'category.create',            'uses'=>'Admin\CategoryController@create']);
    Route::post('category/store',           ['as'=>'category.store',             'uses'=>'Admin\CategoryController@store']);
    Route::get('category/edit/{id}',        ['as'=>'category.edit',              'uses'=>'Admin\CategoryController@edit']);
    Route::post('category/update/{id}',     ['as'=>'category.update',            'uses'=>'Admin\CategoryController@update']);
    Route::get('category/delete/{id}',      ['as'=>'category.delete',            'uses'=>'Admin\CategoryController@destroy']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
