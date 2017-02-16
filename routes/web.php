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
    return redirect('login');
});

Route::get('login', function(){
	Auth::routes();
});
Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/create_cheque', 'HomeController@cheque');
Route::get('/cheques_list', 'HomeController@cheques_list');
Route::get('/cheques_approval', 'admin\AdminApproval@cheques_approval');
Route::get('/no_access', 'HomeController@no_access');



Route::post('create_cheque/store', 'HomeController@cheque_store');
Route::post('request_approve', 'admin\AdminApproval@request_approve');
Route::post('cheque_print', 'HomeController@cheque_print');



