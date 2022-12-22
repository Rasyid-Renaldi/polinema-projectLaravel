<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// ROUTE DATA SISWA => MANAJER DASHBOARD
Route::namespace('App\Http\Controllers')->group(function () {
    // GET API - Buat menampilkan Data Siswa baik berupa Array maupun berdasar id 
    //[StudentController::class, 'index']
    Route::get('students/{id?}', 'StudentController@index');

    // PUT API - Buat update detail Data Siswa
    Route::put('update-students/{id?}', 'StudentController@update');

    // POST API - Buat test add student
    Route::post('add-students', 'StudentController@store');

    Route::delete('delete-students/{id?}', 'StudentController@delete');
});

// ROUTE FORUM => MANAJER DASHBOARD
Route::namespace('App\Http\Controllers')->group(function () {
    // GET API - Buat menampilkan Data Forum baik berupa Array maupun berdasar id
    Route::get('forums/{id?}', 'ForumController@index');

    // PUT API - Buat update detail Forum
    Route::put('update-forums/{id?}', 'ForumController@update');

    // DELETE API - Buat delete topik Forum
    Route::delete('delete-forums/{id?}', 'ForumController@destroy');
});

Route::namespace('App\Http\Controllers')->group(function () {

    // GET API - Buat deskripsi yang sudah di reply
    Route::get('replies/{id?}', 'ReplyController@index');

    // POST API - Buat melakukan reply topik diskusi forum
    Route::post('reply-topics/{id?}, ReplyController@store');

    // PUT API - Buat edit reply 
    Route::put('update-topics/{id?}', 'ReplyController@update');
});
