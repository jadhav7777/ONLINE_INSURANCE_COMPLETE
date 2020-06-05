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


//categories
//create route except create method inside CategoryController
Route::resource('categories','CategoryController',['except'=>'create']);

Route::resource('tags','TagController',['except'=>'create']);

// all comments routes are here
Route::post('comments/{post_id}',['uses'=>'CommentsController@store','as'=>'comments.store']);
Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit','as'=>'comments.edit']);
Route::put('comments/{id}',['uses'=>'CommentsController@update','as'=>'comments.update']);
Route::delete('comments/{id}',['uses'=>'CommentsController@destroy','as'=>'comments.destroy']);
Route::get('comments/{id}/delete',['uses'=>'CommentsController@delete','as'=>'comments.delete']);



Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');

//parameters given and "as" work as for assign a name in route list and "uses" to route a path to controller;

/* Here all of the content of navabar */
Route::get('blog',['uses'=>'BlogController@getIndex','as'=>'blog.Index']);



Route::get('contact','pagescontroller@getContact');
Route::post('contact','pagescontroller@postContact');

Route::get('about', 'pagescontroller@getAbout');

Route::get('/','pagescontroller@getIndex');
Route::get('welcome','pagescontroller@getIndex');
 /* here navbar contents and routes end*/
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostController');