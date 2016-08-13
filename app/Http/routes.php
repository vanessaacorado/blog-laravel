<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as' =>'index','uses'=> "PostC@index"]);
Route::get('admin', ['as'=>'admin.index', 'uses'=>'PostsAdminC@index']);
Route::get('admin/create', ['as'=>'admin.create', 'uses'=>'PostsAdminC@create']);
Route::post('admin/store', ['as'=>'admin.store', 'uses'=>'PostsAdminC@store']);
Route::get('admin/edit/{id}', ['as'=>'admin.edit', 'uses'=>'PostsAdminC@edit']);
Route::put('admin/update/{id}', ['as'=>'admin.update', 'uses'=>'PostsAdminC@update']);
Route::get('admin/destroy/{id}', ['as'=>'admin.destroy', 'uses'=>'PostsAdminC@destroy']);
	