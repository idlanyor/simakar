<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
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
// Auth::routes([
//     'register' => false,
//     'reset' =>false
// ]);
Route::get('/', function () {
    return view('landing');
});
Route::middleware(['auth:sanctum', 'verified'])->
get('/dashboard', function () {
    return view('induk.index');
})->name('dashboard');
// MASTER DATA
Route::resource('admin/user', UserController::class);
Route::resource('admin/kelas', KelasController::class);
Route::resource('admin/mapel', MapelController::class);
Route::resource('admin/guru', GuruController::class);
Route::resource('admin/siswa', SiswaController::class);
// ROUTE UNTUK PPDB
// Route::resource('ppdb/siswa', SiswaPpdbController::class);
// Route::resource('ppdb/admin', AdminPpdbController::class);
// Route::resource('ppdb/pendaftar', UserPpdbController::class);
//--route tambahan untuk setting--
Route::get('admin/source', [SettingController::class,'viewSource'])->name('settings.source');
Route::post('admin/source/store', [SettingController::class,'createsource'])->name('create.source');
Route::post('daftar', [UserController::class,'daftar'])->name('daftar');
