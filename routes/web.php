<?php
// menggunakan class Controller di route
use App\Http\Controllers\Controller;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class,'welcome']);
Route::middleware(['auth:sanctum', 'verified'])->
get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
// route untuk Controller User
Route::resource('admin/user', UserController::class);
// route untuk Controller Kelas
Route::resource('admin/rombel', RombelController::class);
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
Route::get('admin/kelas/add',[RombelController::class,'addKelas'])->name('rombel.addKelas');
Route::post('admin/kelas/store',[RombelController::class,'storeKelas'])->name('rombel.storeKelas');
Route::post('admin/jurusan/store',[RombelController::class,'storeJurusan'])->name('rombel.storeJurusan');
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
Route::get('admin/jurusan/add',[RombelController::class,'addJurusan'])->name('rombel.addJurusan');
// route untuk Controller Mapel
Route::resource('admin/mapel', MapelController::class);
// route untuk Controller Guru
Route::resource('admin/guru', GuruController::class);
// route untuk Controller Siswa
Route::resource('admin/siswa', SiswaController::class);

// ROUTE UNTUK PPDB
// Route::resource('ppdb/siswa', SiswaPpdbController::class);
// Route::resource('ppdb/admin', AdminPpdbController::class);
// Route::resource('ppdb/pendaftar', UserPpdbController::class);
//--route tambahan untuk setting--
Route::get('admin/source', [SettingController::class,'viewSource'])->name('settings.source');
Route::post('admin/source/store', [SettingController::class,'createsource'])->name('create.source');
Route::post('daftar', [UserController::class,'daftar'])->name('daftar');
