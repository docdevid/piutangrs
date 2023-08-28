<?php

use App\Http\Controllers\BiayaPerawatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\JenisPerawatanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PiutangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SetingsController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return redirect('login');
});
Route::get('/import', [ImportController::class, 'index'])->name('import');
Route::get('/import-pasien', [ImportController::class, 'pasien'])->name('import-pasien');
Route::get('/import-piutang', [ImportController::class, 'piutang'])->name('import-piutang');
Route::get('/import-biaya', [ImportController::class, 'biaya'])->name('import-biaya');

Route::get('/dashboard', [DashboardController::class, '__invoke'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /**
     * piutang
     */
    Route::get('/piutang/import', [PiutangController::class, 'import'])->name('piutang.import');
    Route::get('/piutang/export', [PiutangController::class, 'showExport'])->name('piutang.export');
    Route::get('/piutang/export/excel', [PiutangController::class, 'export'])->name('piutang.excel');
    Route::get('/piutang/pasien', [PiutangController::class, 'getPasien'])->name('piutang.pasien');
    Route::resource('/piutang', PiutangController::class);


    Route::resource('/jenis-perawatan', JenisPerawatanController::class);
    /**
     * Pasien
     */
    Route::get('/pasien/import', [PasienController::class, 'import'])->name('pasien.import');
    Route::resource('/pasien', PasienController::class);
    Route::resource('/pengguna', PenggunaController::class);

    Route::put('/setings-export', [SetingsController::class, 'update'])->name('seting-export.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile-picture', [ProfileController::class, 'updateProfilePicture'])->name('profile-picture.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
