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

Route::get('/','indexController@index');//主頁導向

//result頁面
Route::get('/result','resultController@index');
Route::post('/pixnetscore','resultController@pixnetscore');
Route::post('/xuitescore','resultController@xuitescore');
Route::post('/pttscore','resultController@pttscore');
Route::post('/youtubescore','resultController@youtubescore');

//index頁面
Route::get('/index','indexController@index');
Route::get('/popular','indexController@popular');
Route::get('/appraise','indexController@appraise');
Route::get('/random','indexController@random');


//contact 頁面
Route::get('/contact','contactController@index');
Route::post('/mail','contactController@contact');







?>

