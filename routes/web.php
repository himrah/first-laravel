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

Route::get('/','GlobalController@index');
Route::get('/profile/{id?}','GlobalController@profile');
Route::get('/my','GlobalController@mypage');
Route::post('/p','GlobalController@send');
/*Route::get('/', function () {
    //return view('welcome');
    return view('my');
});
Route::get('/profile',function(){
    //return '<h1 align=center>profile</h1>';
    //return view("profile",['name'=>'ajay','class'=>'XII']);
    return view("profile")->with('name','Ajay')->with('class','Xii');
});
Route::get('/abc',function(){
    return view('abc');
});*/

