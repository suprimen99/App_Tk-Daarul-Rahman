<?php

use App\Http\Controllers\Admin\PendaftarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


// Auth
    Route::get('/',[DashboardController::class,'dashboard2'])->name('/dashboard2');

    Route::get('login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'Authenticate'])->name('/login');
    Route::get('registrasi',[AuthController::class,'registrasi'])->name('registrasi');
    Route::post('/registrasi',[AuthController::class,'registerprocess'])->name('/registrasi');
    Route::get('pendaftar',[SiswaController::class, 'pendaftar'])->name('pendaftar');
    Route::POST('/simpan',[SiswaController::class, 'pendaftarsimpan'])->name('/simpan');
    Route::get('berhasildaftar',[SiswaController::class,'berhasildaftar'])->name('berhasildaftar');
    Route::middleware('auth.admin')->group(function(){

        Route::resource('/pendaftaran-siswa', PendaftarController::class);
        // Halaman Admin
        Route::POST('simpanpendaftar',[SiswaController::class,'insert'])->name('simpanpendaftar');
        Route::get('logout',[AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');
        Route::get('tambahpendaftar',[SiswaController::class, 'tambahpendaftar'])->name('admin.tambahpendaftar');
        Route::get('datapendaftar',[SiswaController::class,'datapendaftar'])->name('Admin.datapendaftar');
        Route::resource('editpendaftar', SiswaController::class);
        Route::put('ubahpendaftar/{id}',[SiswaController::class,'ubahpendaftar'])->name('Admin.ubahpendaftar');
        Route::get('hapuspendaftar/{id}',[SiswaController::class,'hapus'])->name('hapuspendaftar');

        // paralax
        Route::get('tambahparalax',[PictureController::class,'tambahparalax'])->name('tambahparalax');
        Route::post('simpanparalax',[PictureController::class,'simpanparalax'])->name('simpanparalax');
        Route::get('hapusparalax/{id}',[PictureController::class,'hapusparalax'])->name('hapusparalax');
        // Logo
        Route::get('tambahlogo',[PictureController::class,'tambahlogo'])->name('tambahlogo');
        Route::post('simpanlogo',[PictureController::class,'simpanlogo'])->name('simpanlogo');
        Route::get('hapuslogo/{id}',[PictureController::class,'hapuslogo'])->name('hapuslogo');
        // galeri
        Route::get('tambahgalery',[PictureController::class,'tambahgalery'])->name('tambahgalery');
        Route::post('simpangalery',[PictureController::class,'simpangalery'])->name('simpangalery');
        Route::get('hapusgaleri/{id}',[PictureController::class,'hapusgalery'])->name('hapusgalery');

});

// // Halaman Pendaftar/Siswa
// Route::middleware('auth.Siswa')->group(function()
// {
//     route::get('dashboardsiswa',[DashboardController::class,'dashboardsiswa'])->name('dashboardsiswa');
//     route::get('tambahsiswa',[DashboardController::class,'tambahsiswa'])->name('tambahsiswa');
//     route::post('simpandata',[DashboardController::class,'simpandata'])->name('simpandata');
// });

