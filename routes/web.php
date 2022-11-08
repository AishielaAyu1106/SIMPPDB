<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\InfoDaftarController;

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
    return view('auth.login2');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/updateJadwal', [AdminController::class, 'updateData'])->name("updateJadwal");
    // Route::get('/dashboard', [AdminController::class, 'dashboardadmin'])->name('dashboardadmin');
    // Route::get('/dashboard', function () {
    //     return view('Dashboard.Admin.main')->name('dashboard');
    // });

    // Route::get('/dashboard-siswa', [FormController::class, 'dashboardSiswa'])->name('dashboard');
    Route::get('/dashboard-siswa', [FormController::class, 'dashboardsiswa'])->name('dashboardsiswa');

    // Route::get('/pengumuman-siswa', function () {
    //     return view('Dashboard.Calon-Siswa.pengumuman');
    // });

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

    Route::get('/data-pendaftar' , [AdminController::class, 'dataPendaftar']);
    Route::get('/data-pendaftar/show/{id}', [AdminController::class, 'showData']);
    Route::get('/kelas-pendaftar/{id}', [AdminController::class, 'kelas'])->name('kelas');
    Route::post('/data-pendaftar/delete/{id}', [AdminController::class, 'hapusdata']);


    Route::get('/rekap-nilai-admin', [AdminController::class, 'rekapAdmin']);
    Route::post('/rekap-nilai-admin/delete/{id}', [AdminController::class, 'hapusrekapadmin']);

    Route::post('/status-berkas/{id}', [AdminController::class, 'statusBerkas']);
    // Route::post('/tolak-berkas', [AdminController::class, 'tolak']);

    // Route::get('/dashboard', function () {
    //     return view('Dashboard.Admin.main');
    // });

    Route::get('/dashboard', [AdminController::class, 'datapendaftarDashboard']);

    Route::get('/pengumuman', [AdminController::class, 'pengumuman'])->name('pengumuman');

    Route::post('/pengumuman-admin-diterima', [AdminController::class, 'pengumumanditerima'])->name('pengumumanditerima');
    Route::post('/pengumuman-admin-ditolak', [AdminController::class, 'pengumumanditolak'])->name('pengumumanditolak');
    Route::post('/pengumuman-delete/{id}', [AdminController::class, 'deletePengumuman'])->name('deletePengumuman');


    // Route::get('/data-pendaftar', function () {
    //     return view('Dashboard.Admin.data-pendaftar');
    // });

    Route::get('/data-admin', function () {
        return view('Dashboard.Admin.data-admin');
    });

    Route::resource('kuota-kelas', KelasController::class);

    // Route::get('/kuota-kelas', [KelasController::class, 'Kelas']);
    Route::get('kuota-kelas-lihat', [KelasController::class, 'tambahkelas'])->name('tambahkelas');


    Route::get('/rekap-nilai', function () {
        return view('Dashboard.Admin.rekap-nilai');
    });

    // Route::get('/upload-panduan', function () {
    //     return view('Dashboard.Admin.upload-panduan');
    // });

    Route::get('/upload-panduan', [AdminController::class, 'panduanpendaftaran'])->name('panduanpendaftaran');
    Route::post('/upload-panduan/store', [AdminController::class, 'uploadpanduan'])->name('uploadpanduan');
    Route::get('/upload-panduan/show/{id}', [AdminController::class, 'showpanduan']);
    Route::post('/upload-panduan/delete/{id}', [AdminController::class, 'deletepanduan']);





    Route::get('/info-pendaftaran',[InfoDaftarController::class, 'index']);
    Route::post('/informasi-pendaftaran',[InfoDaftarController::class, 'store']);
    Route::get('/informasi-pendaftaran',[InfoDaftarController::class, 'showInfo']);
    Route::post('/info-pendaftaran/delete/{id}',[InfoDaftarController::class, 'deleteinfo']);

    Route::get('/cetak-bukti-siswa', function () {
        return view('Dashboard.Calon-Siswa.cetak-bukti');
    });

    // Route::get('/rekap-nilai-siswa', function () {
    //     return view('Dashboard.Calon-Siswa.rekap-nilai');
    // });

    // Route::get('/download-panduan-siswa', function () {
    //     return view('Dashboard.Calon-Siswa.download-panduan');
    // });

    Route::get('/download-panduan-siswa', [FormController::class, 'downloadpanduan']);



    Route::get('/profile-siswa', [FormController::class, 'profileSiswa']);
    Route::get('/edit-profile-siswa', [FormController::class, 'editProfile']);
    Route::get('/profile-admin', [AdminController::class, 'profileAdmin']);

    // Route::get('/profile-siswa', function () {
    //     return view('Dashboard.Calon-Siswa.profile_siswa');
    // });

    Route::get('/jadwal-pendaftaran-tambah', [AdminController::class, 'jadwal'])->name('jadwalPendaftaran');
    Route::post('/jadwal-pendaftaran', [AdminController::class, 'store']);
    Route::get('/jadwal-pendaftaran', [AdminController::class, 'kategori'])->name('lihatjadwal');
    Route::get('/jadwal-pendaftaran/delete/{id}', [AdminController::class, 'destroy'])->name('hapusjadwal');
});

require __DIR__.'/auth.php';






// Route::get('/jadwal-pendaftaran}', [AdminController::class, 'jadwal']);
// Route::post('/jadwal-pendaftaran}', [AdminController::class, 'store']);
// Route::get('/jadwal-pendaftaran', [AdminController::class, 'kategori']);



