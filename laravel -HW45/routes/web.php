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
Route::delete('/card/{card}/delete', 'IndexController@destroy');
Route::get('/','IndexController@index');
Route::get('/card/{card}/edit', 'IndexController@edit');
Route::put('/card/{card}', 'IndexController@update');
Route::get('/create', 'IndexController@create'); 
Route::get('/card/{card}', 'IndexController@show');
Route::post('/cards', 'IndexController@store');




Route::get('/left-sidebar', function(){
    return view('left-sidebar');
});


Route::get('/left-sidebar', function(){
    return view('left-sidebar');
});

Route::get('/right-sidebar', function(){
    return view('right-sidebar');
});

Route::get('/no-sidebar', function(){
    return view('no-sidebar');
});
