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
use \app\Http\Controllers\CategoryController
use Illuminate\Support\Facades\Route;
Route::group( 
	['prefix'=>'Controllers', 'as'=> 'news::'];
	function(){	
		Route::get('/','CategoryController@index')->name('index');
 
		Route::get('category/{id}','CategoryController@actionCategory')->where('id','[0-9]+')->name('categories');
		Route::get('card/{id}','CategoryController@actionCard')->where('id'=>'[0-9]+')->name('card');

});

		
