<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\GambarController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/redirects',[HomeController::class,"index"]);

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/informasitagihan', function () {
    return view('informasitagihan');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/historyPembayaran', [App\Http\Controllers\PembayaranController::class, 'indexHistory']);

Route::get('/buktiPengambilan', function() {
    return view('buktiPengambilan');
});

Route::get('/informasitagihan', [PembayaranController::class, 'index'])->name('pembayaran.index');

Route::post('/pembayaran/store', [PembayaranController::class, 'storePayment'])->name('pembayaran.storePayment');

Route::get('/uploadbukti', function() {
    return view('uploadbukti');
});

Route::get('/listrumah', function() {
    return view('listrumah');
})->name('list.rumah');

Route::get('/uploadbukti/{id}', [HomeController::class, 'ambilList']);

Route::post('/uploadbukti/upload', [HomeController::class, 'storeUpload'])->name('upload.bukti');

Route::get('/buktiPengambilan', [GambarController::class, 'gambar']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
