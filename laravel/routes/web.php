<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\CrudController;
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



Route::get('/','BlogsController@trangchu' );

Route::get('/tim-kiem','BlogsController@tim_kiem');


Route::resource('blogs','BlogsController');
Route::resource('Curd','CurdController');
Route::resource('Post','GiangvienController');
Route::resource('Monhoc','MonhocController');
Route::resource('Dangkymon','DangkymonController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


