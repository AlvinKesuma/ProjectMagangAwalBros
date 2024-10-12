<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKomiteMutuController;
use App\Http\Controllers\AntibioticProphylaxisController;
use App\Http\Controllers\ElectiveSurgeryDelay30MinController;

/*
|-------------------------------------------------------------------------- 
| Web Routes 
|-------------------------------------------------------------------------- 
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider within a group which 
| contains the "web" middleware group. Now create something great! 
*/

// Mengubah default view ke laporan-komite-mutu
Route::get('/', [LaporanKomiteMutuController::class, 'index'])->name('laporan-komite-mutu.index');

// Rute untuk halaman laporan komite mutu
Route::get('/laporan-komite-mutu', [LaporanKomiteMutuController::class, 'index'])->name('laporan-komite-mutu.index');

// Rute untuk menyimpan data dari form 1
Route::post('/laporan-komite-mutu/form1/store', [LaporanKomiteMutuController::class, 'storeForm1'])->name('form1.store');

// Rute untuk menyimpan data dari form 2
Route::post('/laporan-komite-mutu/form2/store', [LaporanKomiteMutuController::class, 'storeForm2'])->name('form2.store');

// Resource routes for AntibioticProphylaxisController
Route::resource('antibiotic-prophylaxis', AntibioticProphylaxisController::class);

// Rute untuk akses halaman tambahan dari AntibioticProphylaxis
Route::get('/antibiotic-prophylaxis', [AntibioticProphylaxisController::class, 'index'])->name('antibiotic-prophylaxis.index');

// Rute untuk menyimpan data dari antibiotik profilaksis
Route::post('/antibiotic-prophylaxis/store', [AntibioticProphylaxisController::class, 'store'])->name('antibiotic-prophylaxis.store');

// Resource routes for ElectiveSurgeryDelay30MinController
Route::resource('elective-surgery-delay-30-min', ElectiveSurgeryDelay30MinController::class);

// Rute untuk akses halaman tambahan dari ElectiveSurgeryDelay30Min
Route::get('/elective-surgery-delay-30-min', [ElectiveSurgeryDelay30MinController::class, 'index'])->name('elective-surgery-delay-30-min.index');

// Rute untuk menyimpan data dari penundaan operasi elektif
Route::post('/elective-surgery-delay-30-min/store', [ElectiveSurgeryDelay30MinController::class, 'store'])->name('elective-surgery-delay-30-min.store');
