<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers')->group(function () {
    // GET API - Buat menampilkan Data Siswa baik berupa Array maupun berdasar id
    Route::get('students/{id?}', 'StudentController@getStudents');

    // PUT API - Buat update detail Data Siswa
    Route::put('update-students/{id?}', 'StudentController@updateStudents');
});

Route::namespace('App\Http\Controllers')->group(function () {
    // GET API - Buat menampilkan Data Forum baik berupa Array maupun berdasar id
    Route::get('forums/{id?}', 'ForumController@getForums');

    // PUT API - Buat update detail Forum
    Route::put('update-forums/{id?}', 'ForumController@updateForums');
});
