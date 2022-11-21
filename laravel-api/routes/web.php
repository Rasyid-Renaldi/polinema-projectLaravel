<?php

use App\Http\Controllers\adminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [adminController::class, 'login']);
Route::get('/admin', [adminController::class, 'index']);
Route::get('/datasiswa', [adminController::class, 'dataSiswa']);

//routes support page
Route::get('/dataLaporan', [adminController::class, 'dataLaporan']);
Route::get('/detail-laporan', [adminController::class, 'detailLaporan']);

