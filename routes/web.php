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
Route::get('/contact_us', function () {
    return view('/contact_us');
});
Route::get('/add_dc', function () {
    return view('/add_dc');
});
Route::get('/view_message', function () {
    return view('/view_message');
});
Route::get('/livestream', function () {
    return view('/livestream');
});
Route::get('/aboutUs', function () {
    return view('/aboutUs');
});
Route::get('/view_dc', function () {
    return view('/view_dc');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/allmembers', 'MemberController@showall')->name('home');
Route::post('/allmembers/update', 'MemberController@update')->name('home');
Route::get('/members', 'MemberController@showall')->name('home');
Route::post('/members/delete', 'MemberController@delete')->name('home');

Route::get('/members_view', 'MembersViewController@index');
Route::post('members_view/fetch', 'MembersViewController@fetch')->name('membersview.fetch');



Route::get('/uploadevents', 'EventController@uploadevents');
Route::post('/upload', 'EventController@upload');
Route::get('/updateevents', 'EventController@updateevents');
Route::post('/update', 'EventController@update');

Route::get('/events', 'EventController@showall');
Route::post('/likeEvent', 'EventController@likeEvent')->name('like');


Route::post('/contact_us', 'MessageController@store');
Route::get('/view_messages', 'MessageController@index');
Route::post('/view_messages', 'MessageController@show');

Route::post('/add_dc', 'DcController@store');
Route::get('/view_dc', 'DcController@showall');
Route::post('/dc/delete', 'DcController@delete')->name('home');

Route::post('/livestream', 'LiveStreamController@store');
