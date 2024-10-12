<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKomiteMutuController;
use App\Http\Controllers\AntibiotikProfilaksisController;
use App\Http\Controllers\PenundaanOperasiElectif30MinController;

/*
|-------------------------------------------------------------------------- 
| Web Routes 
|-------------------------------------------------------------------------- 
| Here is where you can register web routes for your application. These 
| routes are loaded by the RouteServiceProvider within a group which 
| contains the "web" middleware group. Now create something great! 
*/

Route::get('/', [LaporanKomiteMutuController::class, 'index'])->name('laporan-komite-mutu.index');

Route::get('/laporan-komite-mutu', [LaporanKomiteMutuController::class, 'index'])->name('laporan-komite-mutu.index');
Route::post('/laporan-komite-mutu/form1/store', [LaporanKomiteMutuController::class, 'storeForm1'])->name('form1.store');
Route::post('/laporan-komite-mutu/form2/store', [LaporanKomiteMutuController::class, 'storeForm2'])->name('form2.store');

Route::resource('antibiotik-profilaksis', AntibiotikProfilaksisController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::get('/antibiotik-profilaksis', [AntibiotikProfilaksisController::class, 'index'])->name('antibiotik-profilaksis.index');

Route::resource('penundaan-operasi-electif-30Min', PenundaanOperasiElectif30MinController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']); 

Route::get('/penundaan-operasi-electif-30Min', [PenundaanOperasiElectif30MinController::class, 'index'])->name('penundaan-operasi-electif-30Min.index');
