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
//login page
Route::get('/', function () {
 
    return view('login');
});

//first register page
Route::get('/reg', function () {
    return view('earn.reg1');
});

// validate input data and load second register page
route::post('/reg2','regcontroller@validation');

//verification code page
route::post('/verified','regcontroller@store');

//loging controller
route::get('/login','loginncontroller@log');

//password forget
route::get('/forget','passwordresetcontroller@reset');

//password reset link
route::get('/login/{Token}/edit','passwordresetcontroller@edit');

//resetting password
route::patch('/login/{id}','passwordresetcontroller@update');








//testing purpose
Route::get('/test', function () {
 
    return view('test');
});
route::get('/test2','testcontroller@uid');