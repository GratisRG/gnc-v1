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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile-edit', 'DashbordController@profile')->name('profile');
Route::get('/dashbord', 'DashbordController@dashbord')->name('dashbord');

/*------------------- Activation code  --------*/
/*Route::resource('secretcode', 'SecretCodeController');*/
Route::get('/A6N73xmv/BbH4xq96/activation-code', 'SecretCodeController@index')->name('codeindex');
Route::get('/A6N73xmv/BbH4xq96/activation-code/create', 'SecretCodeController@create')->name('codecreate');
Route::post('/A6N73xmv/BbH4xq96/activation-code/store', 'SecretCodeController@store')->name('codestore');
Route::get('/A6N73xmv/BbH4xq96/activation-code/new-generated-code/{lot}', 'SecretCodeController@newstored')->name('codenewstored');
Route::get('/Wbv223Cd/QxdX64n3/effio', 'AdminController@index')->name('adminindex');