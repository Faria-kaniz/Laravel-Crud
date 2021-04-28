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

Route::get('/', 'StudentController@addcour')->name('course.student'); 
Route::post('/addpost', 'StudentController@savecour');    
Route::get('/student_list', 'StudentController@studentlist');
Route::get('/edit-c/{id}', 'StudentController@editdetails');
Route::get('/delete-c/{id}', 'StudentController@deletedetails')->name('deleted');
Route::post('/update-c', 'StudentController@updatedetails')->name('updated');
Route::get('/modal', 'StudentController@modalpop');
