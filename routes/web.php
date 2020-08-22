<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Controller@index');
Route::post('/', 'Controller@store');
Route::get('/pages/single_menu/{menu}', 'PageController@tab');
Route::get('/pages/single_blog/{post}', 'PageController@singlePost');



Route::post('/pages/single_blog/{post}', 'PageController@commentStore');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/Post/home', 'adminPostController@index');
Route::get('/admin/Post/create', 'adminPostController@create');
Route::post('/admin/Post/home', 'adminPostController@store');
Route::get('/admin/Post/{post}', 'adminPostController@show');
Route::get('/admin/Post/{post}/edit', 'adminPostController@edit');
Route::patch('/admin/Post/{post}', 'adminPostController@update');
Route::delete('/admin/Post/{post}', 'adminPostController@delete');

Route::get('/admin/Comment/homedash', 'adminCommentController@index');
Route::patch('/admin/Comment/{comment}', 'adminCommentController@update');
Route::delete('/admin/Comment/{comment}', 'adminCommentController@delete');


