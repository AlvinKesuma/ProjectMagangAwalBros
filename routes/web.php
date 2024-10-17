<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKomiteMutuController;
use App\Http\Controllers\AntibiotikProfilaksisController;
use App\Http\Controllers\PenundaanOperasiElectif30MinController;
use App\Http\Controllers\PenundaanOperasiElectif1JamController;
use App\Http\Controllers\WaktuTanggapSeksiSesareaController;
use App\Http\Controllers\KejadianWaterIntrusionController;
use App\Http\Controllers\PemeliharaanAlatMedisController;
use App\Http\Controllers\KepatuhanVAPController;
use App\Http\Controllers\KepatuhanIDOController;
use App\Http\Controllers\KepatuhanIADPController;
use App\Http\Controllers\KepatuhanISKController;
use App\Http\Controllers\KelengkapanResepRawatJalanController;
use App\Http\Controllers\PengelolaanKomplainPasienController;
use App\Http\Controllers\KepuasanPasienController;
use App\Http\Controllers\WaktuTungguRawatJalan30MinController;
use App\Http\Controllers\WaktuTungguRawatJalanUnder30MinController;
use App\Http\Controllers\WaktuTungguRawatJalanUp60MinController;
use App\Http\Controllers\KepatuhanVisitDokterSpesialisController;
use App\Http\Controllers\KepatuhanFormulariumNasionalController;
use App\Http\Controllers\KepatuhanAlurKlinisController;
use App\Http\Controllers\RehospitalisasiGeriatriController;
use App\Http\Controllers\DischargePlanningController;
use App\Http\Controllers\FeedbackPelangganController;
use App\Http\Controllers\PerbaikanStatusCVAController;
use App\Http\Controllers\LOSgagalJantungAkutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', [LaporanKomiteMutuController::class, 'index'])->name('laporan-komite-mutu.index');

Route::resource('laporan-komite-mutu', LaporanKomiteMutuController::class)
    ->only(['index']);

Route::resource('antibiotik-profilaksis', AntibiotikProfilaksisController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('penundaan-operasi-electif-30min', PenundaanOperasiElectif30MinController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('penundaan-operasi-electif-1jam', PenundaanOperasiElectif1JamController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('waktu-tanggap-seksi-sesarea', WaktuTanggapSeksiSesareaController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kejadian-water-intrusion', KejadianWaterIntrusionController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('pemeliharaan-alat-medis', PemeliharaanAlatMedisController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-vap', KepatuhanVAPController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-ido', KepatuhanIDOController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-iadp', KepatuhanIADPController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-isk', KepatuhanISKController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kelengkapan-resep-rawat-jalan', KelengkapanResepRawatJalanController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('pengelolaan-komplain-pasien', PengelolaanKomplainPasienController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepuasan-pasien', KepuasanPasienController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('waktu-tunggu-rawat-jalan-30min', WaktuTungguRawatJalan30MinController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('waktu-rawat-jalan-under30min', WaktuTungguRawatJalanUnder30MinController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('waktu-rawat-jalan-up60min', WaktuTungguRawatJalanUp60MinController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-visit-dokter-spesialis', KepatuhanVisitDokterSpesialisController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-formularium-nasional', KepatuhanFormulariumNasionalController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('kepatuhan-alur-klinis', KepatuhanAlurKlinisController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('rehospitalisasi-geriatri', RehospitalisasiGeriatriController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('discharge-planning', DischargePlanningController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('feedback-pelanggan', FeedbackPelangganController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('perbaikan-status-cva', PerbaikanStatusCVAController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);

Route::resource('los-gagal-jantung-akut', LOSgagalJantungAkutController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);