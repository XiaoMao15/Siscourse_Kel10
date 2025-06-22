<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KeluhanController;

Route::get('/', function () {
    return redirect('/beranda');
});
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/keluhan', [KeluhanController::class, 'form'])->name('keluhan');
Route::post('/keluhan', [KeluhanController::class, 'kirim'])->name('hasilkeluh.kirim');

Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/about', function () {
    return view('pages.about');
})->middleware('auth');
Route::get('/mycourse', function () {
    return view('pages.kelas');
    })->middleware('auth');
Route::get('/contact', function () {
    return view('pages.contact');
})->middleware('auth');
Route::get('/matakuliah', function () {
    return view('pages.matakuliah');
})->middleware('auth');
Route::get('/matakuliah/software', function () {
    return view('pages.matakuliah.software');
})->middleware('auth');
Route::get('/matakuliah/Ai', function () {
    return view('pages.matakuliah.Ai');
})->middleware('auth');
Route::get('/matakuliah/software-html', function () {
    return view('pages.matakuliah.software-html');
})->middleware('auth');
Route::get('/matakuliah/keamanan', function () {
    return view('pages.matakuliah.keamanan');
})->middleware('auth');
