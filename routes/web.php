<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware'=>'auth'],function(){

        Route::get('/', function () {
            return view('frontpage');
        });

        Route::get('/notebooks', 'NotebooksController@index');
        Route::post('/notebooks', 'NotebooksController@store');
        Route::get('/notebooks/create', 'NotebooksController@create');
        Route::get('/notebooks/{notebooks}', 'NotebooksController@edit');
        Route::put('/notebooks/{notebooks}', 'NotebooksController@update');
        Route::delete('/notebooks/{notebooks}', 'NotebooksController@destroy');
});


Auth::routes();
