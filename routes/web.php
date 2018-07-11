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


Route::get('/materials',function(){
	return view('materials');
});


Route::get('vuejs',function(){
	return response()->download(public_path('files/vue.js'));
});

Route::get('sublime',function(){
	return response()->download(public_path('files/SublimeTextBuild3176.zip'));
});


Route::get('bulma',function(){
	return response()->download(public_path('files/bulma.css'));
});

Route::get('git',function(){
	return response()->download(public_path('files/git.exe'));
});


Route::prefix('/sessions')->group(function(){

	Route::get('/{id}',function($id){
		return view('session'.$id.'.index');
	});

	Route::get('{id}/courses/{cid}',function($id,$cid){
		return view('session'.$id.'.'.$cid);
	});
});



