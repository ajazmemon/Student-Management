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

Route::group(['middleware'=>'auth'], function(){
Route::get('/students', 'StudentController@index')->name('students');
Route::post('/student_register', 'StudentController@create')->name('student_register');
Route::get('/students_list', 'StudentController@students_list')->name('students_list');
Route::get('/edit/{edit}', 'StudentController@edit')->name('edit');
Route::post('/update/{update}', 'StudentController@update')->name('update');
Route::get('/delete/{delete}', 'StudentController@destroy')->name('delete');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/marks', 'MarksController@index')->name('marks');
Route::get('/add_marks', 'MarksController@create')->name('add_marks');
Route::post('/store_data', 'MarksController@store')->name('store_data');
Route::get('/marks_edit/{e}', 'MarksController@edit')->name('marks_edit');
Route::post('/marks_update/{e}', 'MarksController@update')->name('marks_update');
Route::get('/marks_delete/{del}', 'MarksController@destroy')->name('marks_delete');

});