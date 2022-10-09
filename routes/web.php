<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('auth.login2');
    });
    Route::post('/updateJadwal', [AdminController::class, 'updateData'])->name("updateJadwal");

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/dashboard-siswa', [FormController::class, 'dashboard'])->name('dashboard');

    Route::get('/pengumuman-siswa', function () {
        return view('Dashboard.Calon-Siswa.pengumuman');
    });

    Route::get('/formulir-pendaftaran-siswa', [FormController::class, 'index']);
    Route::get('/formulir-pendaftaran-siswa/formulir', [FormController::class, 'afirmasi']);
    Route::post('/formulir-pendaftaran-siswa', [FormController::class, 'store']);
    Route::get('/formulir-pendaftaran-siswa/delete/{id}', [FormController::class, 'destroy']);
    Route::get('/edit-formulir-pendaftaran/{id}', [FormController::class, 'edit']);
    Route::post('/edit-formulir-pendaftaran/{id}', [FormController::class, 'update']);
    Route::get('/formulir-pendaftaran-siswa/show/{id}', [FormController::class, 'show']);

    Route::get('/rekap-nilai-siswa/formulir', [FormController::class, 'rekap']);
    Route::post('/rekap-nilai-siswa', [FormController::class, 'tambahRekap']);
    Route::get('/rekap-nilai-siswa', [FormController::class, 'lihatRekap']);
    Route::get('/rekap-nilai-siswa/show/{id}', [FormController::class, 'showRekap']);
    Route::get('/edit-rekap-nilai-siswa/{id}', [FormController::class, 'editRekap']);
    Route::post('/edit-rekap-nilai-siswa/{id}', [FormController::class, 'updateRekap']);
    Route::get('/rekap-nilai-siswa/delete/{id}', [FormController::class, 'hapusRekap']);

    Route::get('/data-pendaftar' , [AdminController::class, 'dataPendaftar']);
    Route::get('/data-pendaftar/show/{id}', [AdminController::class, 'showData']);
    Route::get('/kelas-pendaftar', [AdminController::class, 'kelas']);
    Route::get('/data-pendaftar/delete/{id}', [AdminController::class, 'hapusdata']);

    Route::get('/rekap-nilai-admin', [AdminController::class, 'rekapAdmin']);

    Route::post('/status-berkas/{id}', [AdminController::class, 'statusBerkas']);
    // Route::post('/tolak-berkas', [AdminController::class, 'tolak']);

    Route::get('/dashboard', function () {
        return view('Dashboard.Admin.main');
    });

    Route::get('/pengumuman', function () {
        return view('Dashboard.Admin.pengumuman');
    });

    // Route::get('/data-pendaftar', function () {
    //     return view('Dashboard.Admin.data-pendaftar');
    // });

    Route::get('/data-admin', function () {
        return view('Dashboard.Admin.data-admin');
    });

    Route::get('/rekap-nilai', function () {
        return view('Dashboard.Admin.rekap-nilai');
    });

    Route::get('/upload-panduan', function () {
        return view('Dashboard.Admin.upload-panduan');
    });

    Route::get('/info-pendaftaran', function () {
        return view('Dashboard.Admin.Informasi-Pendaftaran');
    });

    Route::get('/cetak-bukti-siswa', function () {
        return view('Dashboard.Calon-Siswa.cetak-bukti');
    });

    // Route::get('/rekap-nilai-siswa', function () {
    //     return view('Dashboard.Calon-Siswa.rekap-nilai');
    // });

    Route::get('/download-panduan-siswa', function () {
        return view('Dashboard.Calon-Siswa.download-panduan');
    });

    Route::get('/jadwal-pendaftaran-tambah', [AdminController::class, 'jadwal'])->name('jadwalPendaftaran');
    Route::post('/jadwal-pendaftaran', [AdminController::class, 'store']);
    Route::get('/jadwal-pendaftaran', [AdminController::class, 'kategori'])->name('lihatjadwal');
    Route::get('/jadwal-pendaftaran/delete/{id}', [AdminController::class, 'destroy'])->name('hapusjadwal');
});

require __DIR__.'/auth.php';



// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware("guest");

// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/logout', [LoginController::class, 'logout']);

//--------------------------------------------------REGISTER------------------------------------------------------//

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/dashboard-siswa', function () {
//     return view('Dashboard.Calon-Siswa.main');
// });

// Route::get('/pengumuman-siswa', function () {
//     return view('Dashboard.Calon-Siswa.pengumuman');
// });

// Route::get('/formulir-pendaftaran-siswa', [FormController::class, 'index']);

// Route::get('/formulir-pendaftaran-siswa/tambah', [FormController::class, 'form']);

// Route::post('/formulir-pendaftaran-siswa', [FormController::class, 'store']);

// Route::get('/formulir-pendaftaran-siswa/delete/{id}', [FormController::class, 'destroy']);

// Route::post('/formulir-pendaftaran-siswa/delete/{id}', [FormController::class, 'destroy']);

// Route::get('/edit-formulir-pendaftaran/{id}', [FormController::class, 'edit']);

// Route::post('/edit-formulir-pendaftaran/{id}', [FormController::class, 'update']);

// Route::get('/formulir-pendaftaran-siswa/show/{id}', [FormController::class, 'show']);

// Route::get('/info-pendaftaran', [InfodaftarController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('Dashboard.Admin.main');
// });

// Route::get('/pengumuman', function () {
//     return view('Dashboard.Admin.pengumuman');
// });

// Route::get('/data-pendaftar', function () {
//     return view('Dashboard.Admin.data-pendaftar');
// });

// Route::get('/data-admin', function () {
//     return view('Dashboard.Admin.data-admin');
// });

// Route::get('/rekap-nilai', function () {
//     return view('Dashboard.Admin.rekap-nilai');
// });

// Route::get('/upload-panduan', function () {
//     return view('Dashboard.Admin.upload-panduan');
// });

// Route::get('/info-pendaftaran', function () {
//     return view('Dashboard.Admin.Informasi-Pendaftaran');
// });

// Route::get('/cetak-bukti-siswa', function () {
//     return view('Dashboard.Calon-Siswa.cetak-bukti');
// });

// Route::get('/rekap-nilai-siswa', function () {
//     return view('Dashboard.Calon-Siswa.rekap-nilai');
// });

// Route::get('/download-panduan-siswa', function () {
//     return view('Dashboard.Calon-Siswa.download-panduan');
// });

// Route::get('/jadwal-pendaftaran', function () {
//     return view('Dashboard.Admin.Jadwal');
// });


Route::get('/jadwal-pendaftaran}', [AdminController::class, 'jadwal']);
Route::post('/jadwal-pendaftaran}', [AdminController::class, 'store']);
Route::get('/jadwal-pendaftaran', [AdminController::class, 'kategori']);



