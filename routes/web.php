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

Route::get('/','DashbordController@home'); 

Route::get('/add',function(){

	return view('add') ;

});


Route::post('/insert', 'DashbordController@insert');
Route::get('/update/{id}', 'DashbordController@update');
Route::post('/edit/{id}', 'DashbordController@edit');
Route::get('/delete/{id}', 'DashbordController@delete');
Route::get('/details/{id}', 'DashbordController@chart');

Auth::routes();

Route::get('/home', 'DashbordController@home') ; 
Route::post('/login','DashbordController@login'); 


Route::get('/test', 'ShowVotes@extractVotes') ; 
