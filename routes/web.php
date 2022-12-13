<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\InfoDaftarController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\SearchController;

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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('auth.login3');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/updateJadwal', [AdminController::class, 'updateData'])->name("updateJadwal");



    Route::get('/dashboard-siswa', [FormController::class, 'dashboardsiswa'])->name('dashboardsiswa');



    Route::get('/pengumuman-siswa', [FormController::class, 'PegumumanSiswa']);


    Route::get('/formulir-pendaftaran-siswa', [FormController::class, 'index']);
    Route::get('/formulir-pendaftaran-siswa/formulir', [FormController::class, 'afirmasi']);
    Route::post('/formulir-pendaftaran-siswa', [FormController::class, 'store']);
    Route::post('/formulir-pendaftaran-siswa/delete/{id}', [FormController::class, 'destroy']);
    Route::get('/edit-formulir-pendaftaran/{id}', [FormController::class, 'edit']);
    Route::post('/edit-formulir-pendaftaran/{id}', [FormController::class, 'update']);
    Route::get('/formulir-pendaftaran-siswa/show/{id}', [FormController::class, 'show']);




    Route::get('/rekap-nilai-siswa/formulir', [FormController::class, 'rekap']);
    Route::post('/rekap-nilai-siswa', [FormController::class, 'tambahRekap']);
    Route::get('/rekap-nilai-siswa', [FormController::class, 'lihatRekap']);
    Route::get('/rekap-nilai-siswa/show/{id}', [FormController::class, 'showRekap']);
    Route::get('/edit-rekap-nilai-siswa/{id}', [FormController::class, 'editRekap']);
    Route::post('/edit-rekap-nilai-siswa/{id}', [FormController::class, 'updateRekap']);
    Route::post('/rekap-nilai-siswa/delete/{id}', [FormController::class, 'hapusRekap']);



    Route::get('/data-pendaftar', [AdminController::class, 'dataPendaftar']);
    Route::get('/data-pendaftar/show/{id}', [AdminController::class, 'showData']);
    Route::get('/kelas-pendaftar/{id}', [AdminController::class, 'kelas'])->name('kelas');
    Route::post('/data-pendaftar/delete/{id}', [AdminController::class, 'hapusdata']);


    Route::get('/rekap-nilai-admin', [AdminController::class, 'rekapAdmin']);
    Route::post('/rekap-nilai-admin/delete/{id}', [AdminController::class, 'hapusrekapadmin']);




    Route::post('/status-berkas/{id}', [AdminController::class, 'statusBerkas']);



    Route::get('/dashboard', [AdminController::class, 'datapendaftarDashboard']);




    Route::get('/pengumuman', [AdminController::class, 'pengumuman'])->name('pengumuman');
    Route::post('/pengumuman-admin-diterima', [AdminController::class, 'pengumumanditerima'])->name('pengumumanditerima');
    Route::post('/pengumuman-admin-ditolak', [AdminController::class, 'pengumumanditolak'])->name('pengumumanditolak');
    Route::get('/pengumuman-edit/{id}', [AdminController::class, 'editPengumuman'])->name('editPengumuman');
    Route::post('/pengumuman-edit/{id}', [AdminController::class, 'updatePengumuman']);
    Route::post('/pengumuman-delete/{id}', [AdminController::class, 'deletePengumuman'])->name('deletePengumuman');



    // Route::get('/data-admin', function () {
    //     return view('Dashboard.Admin.manajemen-user-index');
    // });

    Route::get('/data-admin', [ManajemenUserController::class, 'manajemenuser']);
    Route::get('/data-admin-create', [ManajemenUserController::class, 'manajemenusercreate']);
    Route::post('/data-admin-create', [ManajemenUserController::class, 'store']);
    Route::get('/data-admin-edit/{id}', [ManajemenUserController::class, 'edit']);
    Route::post('/data-admin-edit/{id}', [ManajemenUserController::class, 'update']);
    Route::post('/data-admin-delete/{id}', [ManajemenUserController::class, 'destroy']);



    Route::resource('kuota-kelas', KelasController::class);


    Route::get('kuota-kelas-lihat', [KelasController::class, 'tambahkelas'])->name('tambahkelas');



    Route::get('/upload-panduan', [AdminController::class, 'panduanpendaftaran'])->name('panduanpendaftaran');
    Route::post('/upload-panduan/store', [AdminController::class, 'uploadpanduan'])->name('uploadpanduan');
    Route::get('/upload-panduan/show/{id}', [AdminController::class, 'showpanduan']);
    Route::post('/upload-panduan/delete/{id}', [AdminController::class, 'deletepanduan']);





    Route::get('/info-pendaftaran', [InfoDaftarController::class, 'index']);
    Route::post('/informasi-pendaftaran', [InfoDaftarController::class, 'store']);
    Route::get('/informasi-pendaftaran', [InfoDaftarController::class, 'showInfo']);
    Route::post('/info-pendaftaran/delete/{id}', [InfoDaftarController::class, 'deleteinfo']);



    Route::get('/cetak-bukti-siswa', [FormController::class, 'cetakbukti']);


    Route::get('/cetak-data-pendaftaran', [AdminController::class, 'cetakdata']);


    Route::get('/export-data-pendaftaran', [AdminController::class, 'exportdata']);


    Route::get('/download-panduan-siswa', [FormController::class, 'downloadpanduan']);



    Route::get('/profile-siswa', [FormController::class, 'profileSiswa']);
    Route::get('/edit-profile-siswa', [FormController::class, 'editProfile']);
    Route::get('/profile-admin', [AdminController::class, 'profileAdmin']);



    Route::get('/jadwal-pendaftaran-tambah', [AdminController::class, 'jadwal'])->name('jadwalPendaftaran');
    Route::post('/jadwal-pendaftaran', [AdminController::class, 'store']);
    Route::get('/jadwal-pendaftaran', [AdminController::class, 'kategori'])->name('lihatjadwal');
    Route::get('/jadwal-pendaftaran/delete/{id}', [AdminController::class, 'destroy'])->name('hapusjadwal');



    Route::post('kirim-email','App\Http\Controllers\PengumumanMailController@index');

    Route::get('/search', [SearchController::class, 'search'])->name('search');
});

require __DIR__ . '/auth.php';






// Route::get('/jadwal-pendaftaran}', [AdminController::class, 'jadwal']);
// Route::post('/jadwal-pendaftaran}', [AdminController::class, 'store']);
// Route::get('/jadwal-pendaftaran', [AdminController::class, 'kategori']);
