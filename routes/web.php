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

Route::get('/', 'Controller@index');
Route::post('/', 'Controller@store');
Route::get('/pages/single_menu/{menu}', 'PageController@tab');
Route::get('/pages/single_blog/{post}', 'PageController@singlePost');
//
//Route::post('/pages/single_blog/{post}',
//    ['uses'=>'PageController@replyStore',
//        'as'=>'reply'
//    ]);
//
//Route::post('/pages/single_blog/{post}',
//    ['uses'=>'PageController@commentStore',
//        'as'=>'comment'
//    ]);


Route::post('/pages/single_blog/{post}', 'PageController@commentStore');
//Route::post('/pages/single_blog/{post}', 'PageController@replyStore');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
