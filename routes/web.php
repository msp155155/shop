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
Route::get('/123', function () {
    return 123;
});

Route::prefix('/test')->group(function (){
    Route::get('redis1','AddController@redis1');
    Route::get('redis2','AddController@redis2');
});123
