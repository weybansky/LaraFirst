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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', 'PostsController@index');

// Posts
// Creating a new post
Route::get('posts/create', 'PostsController@create');
// Store a post
Route::post('/posts', 'PostsController@store');
// Display single Post
Route::get('/posts/{post}', 'PostsController@show');
// edit existing posts
Route::get('posts/{post}/edit', 'PostsController@edit');
// update existing post
Route::patch('posts/{post}', 'PostsController@update');
// delete a post
Route::get('posts/{post}/delete', 'PostsController@destroy');


// Comments
// Adding new comment
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/posts/{post}/comments/{comment}', 'CommentsController@destroy');


// Authentication
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Pages
Route::get('/p/page', function() {
    return view('pages.index');
});
Route::get('page/create-new-page', function() {
    return view('pages.create');
});

// Nominations and Voting System