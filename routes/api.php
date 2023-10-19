<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\AnakAsuhController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Menampilkan semua data Anak Asuh
Route::get('/anak-asuh', [AnakAsuhController::class, 'index'])->name('anak-asuh.index');

// Menampilkan data Anak Asuh berdasarkan ID
Route::get('/anak-asuh/{id}', [AnakAsuhController::class, 'show'])->name('anak-asuh.show');

// Membuat data Anak Asuh baru
Route::post('/anak-asuh', [AnakAsuhController::class, 'store'])->name('anak-asuh.store');

// Mengupdate data Anak Asuh berdasarkan ID
Route::put('/anak-asuh/{id}', [AnakAsuhController::class, 'update'])->name('anak-asuh.update');

// Menghapus data Anak Asuh berdasarkan ID
Route::delete('/anak-asuh/{id}', [AnakAsuhController::class, 'destroy'])->name('anak-asuh.destroy');





