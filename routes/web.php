<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PeminjamanControlller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'login']);
Route::post('/authenticate', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

// auth
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/mobil', MobilController::class);

// peminjaman
Route::get('peminjaman/cek-mobil', [PeminjamanControlller::class, 'cek_mobil']);
Route::post('peminjaman/cek-mobil', [PeminjamanControlller::class, 'get_mobil_schedule']);
Route::post('/mobil/cek-mobil/{id}/sewa', [PeminjamanControlller::class, 'store']);
Route::get('/peminjaman/is-rented', [PeminjamanControlller::class, 'list_is_rented']);



// Route::resource('/pengembalian', PengembalianController::class);

Route::post('/logout', [AuthController::class, 'logout']);
