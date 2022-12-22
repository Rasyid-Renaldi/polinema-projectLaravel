<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\EnduserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendStudentsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [adminController::class, 'index']);
Route::get('/admin', [adminController::class, 'index']);
// Route::get('/datasiswa', [adminController::class, 'dataSiswa']);

//forum routes
Route::get('/forum', [EnduserController::class, 'forumUser']);
Route::get('/contact', [EnduserController::class, 'contact']);
Route::get('/support', [EnduserController::class, 'support']);
Route::get('/formlaporan', [EnduserController::class, 'formlaporan']);
// Route::get('/coba', [adminController::class, 'coba']);

// Route::get('/coba', [adminController::class, 'coba']);


//CRUD
Route::get('/editsiswa', [adminController::class, 'editSiswa']);
Route::get('/popup', [adminController::class, 'popupTest']);

//routes support page
Route::get('/dataLaporan', [adminController::class, 'dataLaporan']);
Route::get('/detail-laporan', [adminController::class, 'detailLaporan']);

//forumAdmin routes
Route::get('/forumadmin', [adminController::class, 'forum']);


Route::get('/admintanya', [adminController::class, 'adminTanya']);
Route::get('/detailtanya', [adminController::class, 'detailTanya']);
Route::get('/editpostingan', [adminController::class, 'editPostingan']);
Route::get('/editkomentar', [adminController::class, 'editKomen']);
Route::get('/editForum', [adminController::class, 'editForum']);
// Route::get('/jajal', [adminController::class, 'jajalan']);

//route memanggil data students ke tampilan admin
// Route::get('/jajal', [StudentController::class, 'getStudents']);
// Route::resource('datasiswa', [StudentController::class]);

// Route::resource('datasiswa', App\Http\Controllers\StudentController::class);


// Route::get('/edit-siswa/{id}', 'App\Http\Controllers\StudentController@edit');

Route::get('/edit-siswa/', 'App\Http\Controllers\StudentController@edit');
Route::get('/edit-siswa/{id}', 'App\Http\Controllers\StudentController@edit');


//route baru baru baru baru
Route::get('getStudent', [FrontendStudentsController::class, 'index']);
Route::get('datasiswa', [FrontendStudentsController::class, 'getSiswa']);
//route