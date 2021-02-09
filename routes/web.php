<?php
// menggunakan class Controller di route
use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class,'welcome']);
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
Route::get('admin/kelas/add', [KelasController::class,'createKelas'])->name('kelas.tambahKelas');
Route::get('admin/jurusan/add', [KelasController::class,'createJurusan'])->name('kelas.createJurusan');
Route::post('admin/source/store', [SettingController::class,'createsource'])->name('create.source');
Route::post('daftar', [UserController::class,'daftar'])->name('daftar');
