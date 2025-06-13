<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/beranda', function () {
    return view('pages.beranda');
})->middleware('auth');
Route::get('/about', function () {
    return view('pages.about');
})->middleware('auth');
Route::get('/contact', function () {
    return view('pages.contact');
})->middleware('auth');