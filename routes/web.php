<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/beranda');
});

// ======= AUTH =======
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ======= HALAMAN UMUM =======
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/about', function () {
    return view('pages.about');
})->middleware('auth');

Route::get('/contact', function () {
    return view('pages.mahasiswa.contact');
})->middleware('auth');

Route::get('/mycourse', function () {
    return view('pages.mahasiswa.kelas');
})->middleware('auth');

Route::get('/matakuliah', function () {
    return view('pages.mahasiswa.matakuliah');
})->middleware('auth');

// ======= PEMINATAN / MATAKULIAH =======
Route::get('/matakuliah/software', function () {
    return view('pages.mahasiswa.matakuliah.software');
})->middleware('auth');

Route::get('/matakuliah/Ai', function () {
    return view('pages.mahasiswa.matakuliah.Ai');
})->middleware('auth');

Route::get('/matakuliah/UIUX', function () {
    return view('pages.mahasiswa.matakuliah.UIUX');
})->middleware('auth');

Route::get('/matakuliah/software-html', function () {
    return view('pages.mahasiswa.matakuliah.software-html');
})->middleware('auth');

Route::get('/matakuliah/keamanan', function () {
    return view('pages.matakuliah.keamanan');
})->middleware('auth');

Route::get('/matakuliah/network', function () {
    return view('pages.mahasiswa.matakuliah.network');
})->middleware('auth');

Route::get('/matakuliah/data', function () {
    return view('pages.mahasiswa.matakuliah.data');
})->middleware('auth');

Route::get('/matakuliah/cyber', function () {
    return view('pages.mahasiswa.matakuliah.cyber');
})->middleware('auth');

// ======= DOSEN =======
Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dashboarddosen', [TugasController::class, 'index'])->name('tugas.index');
    Route::resource('tugas', TugasController::class)->except(['index']);
    Route::post('/nilai/{id}', [TugasController::class, 'nilai'])->name('tugas.nilai');
});

// ======= MAHASISWA =======
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::view('/dashboardsiswa', 'pages.mahasiswa.dashboardsiswa');
    Route::get('/matakuliah/software-html', [TugasController::class, 'showMahasiswaHtml'])->name('tugas.html');

    Route::get('/tugas/{id}/submit', [TugasController::class, 'submitForm'])->name('tugas.submit');
    Route::post('/tugas/{id}/submit', [TugasController::class, 'submit'])->name('tugas.submit.store');
    
    Route::get('/tugas/{id}/nilai', [TugasController::class, 'nilaiForm'])->name('tugas.nilai.form');
});
