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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::view('/','pages.admin.dashboard.index')->name('admin.dashboard');
	Route::view('/login','pages.admin.auth.login')->name('admin.login');
	Route::view('/user','pages.admin.user.index')->name('admin.user');
	Route::view('/tab','pages.admin.tab.index')->name('admin.tab');
	Route::view('/table','pages.admin.table.index')->name('admin.table');
	Route::view('/form','pages.admin.form.index')->name('admin.form');
	Route::post('/form', function(Illuminate\Http\Request $request) {
	    $request->validate([
	    		'nama'=>'required|min:8',
	    		'email'=>'required|email',
	    		'gender'=>'required',
	    		'alamat'=>'required|min:8',
	    	]);
	    return 'Request done';
	});
});