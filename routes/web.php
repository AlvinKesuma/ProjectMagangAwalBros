<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanKomiteMutuController;
use App\Http\Controllers\KepatuhanIdentifikasiController;
use App\Http\Controllers\IdentifikasiPemberianObatController;
use App\Http\Controllers\PasienPemberianObatController;
use App\Http\Controllers\PasienPemberianDarahController;
use App\Http\Controllers\TeknikSBARPerawatController;
use App\Http\Controllers\ElektrolitPekatController;
use App\Http\Controllers\PencegahanResikoJatuhController;
use App\Http\Controllers\PasienPemberianNutrisiController;
use App\Http\Controllers\SampelDarahLaboratoriumController;
use App\Http\Controllers\IdentifikasiPasienRadiologiController;
use App\Http\Controllers\ProsesReadBackController;
use App\Http\Controllers\HasilKritisLaboratoriumController;
use App\Http\Controllers\PembuanganObatNarkotikaController;
use App\Http\Controllers\PelabelanObatPasienController;
use App\Http\Controllers\OperatorDaerahOperasiController;
use App\Http\Controllers\TimeOutVKController;
use App\Http\Controllers\TimeOutPoliGigiController;
use App\Http\Controllers\PetugasCuciTanganController;
use App\Http\Controllers\PenggunaanAPDController;
use App\Http\Controllers\InfoPenyakitPasienController;
use App\Http\Controllers\BoardingTimePasienController;
use App\Http\Controllers\AntibioticProphylaxisTypeController;
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

Route::get('kepatuhan-identifikasi/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-identifikasi.form');
Route::resource('kepatuhan-identifikasi', KepatuhanIdentifikasiController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('identifikasi-pemberianobat/form', [KepatuhanIdentifikasiController::class, 'form'])->name('identifikasi-pemberianobat.form');
Route::resource('identifikasi-pemberianobat', IdentifikasiPemberianObatController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pasien-pemberianobat/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pasien-pemberianobat.form');
Route::resource('pasien-pemberianobat', PasienPemberianObatController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pasien-pemberiandarah/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pasien-pemberiandarah.form');
Route::resource('pasien-pemberiandarah', PasienPemberianDarahController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('tekniksbar-perawat/form', [KepatuhanIdentifikasiController::class, 'form'])->name('tekniksbar-perawat.form');
Route::resource('tekniksbar-perawat', TeknikSBARPerawatController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('elektrolit-pekat/form', [KepatuhanIdentifikasiController::class, 'form'])->name('elektrolit-pekat.form');
Route::resource('elektrolit-pekat', ElektrolitPekatController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pencegahan-resikojatuh/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pencegahan-resikojatuh.form');
Route::resource('pencegahan-resikojatuh', PencegahanResikoJatuhController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pasien-pemberiannutrisi/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pasien-pemberiannutrisi.form');
Route::resource('pasien-pemberiannutrisi', PasienPemberianNutrisiController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('sampel-darahlaboratorium/form', [KepatuhanIdentifikasiController::class, 'form'])->name('sampel-darahlaboratorium.form');
Route::resource('sampel-darahlaboratorium', SampelDarahLaboratoriumController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('identifikasi-pasienradiologi/form', [KepatuhanIdentifikasiController::class, 'form'])->name('identifikasi-pasienradiologi.form');
Route::resource('identifikasi-pasienradiologi', IdentifikasiPasienRadiologiController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('proses-readback/form', [KepatuhanIdentifikasiController::class, 'form'])->name('proses-readback.form');
Route::resource('proses-readback', ProsesReadBackController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('hasil-kritislaboratorium/form', [KepatuhanIdentifikasiController::class, 'form'])->name('hasil-kritislaboratorium.form');
Route::resource('hasil-kritislaboratorium', HasilKritisLaboratoriumController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pembuangan-obatnarkotika/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pembuangan-obatnarkotika.form');
Route::resource('pembuangan-obatnarkotika', PembuanganObatNarkotikaController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pelabelan-obatpasien/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pelabelan-obatpasien.form');
Route::resource('pelabelan-obatpasien', PelabelanObatPasienController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('operator-daerahoperasi/form', [KepatuhanIdentifikasiController::class, 'form'])->name('operator-daerahoperasi.form');
Route::resource('operator-daerahoperasi', OperatorDaerahOperasiController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('timeout-vk/form', [KepatuhanIdentifikasiController::class, 'form'])->name('timeout-vk.form');
Route::resource('timeout-vk', TimeOutVKController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('timeout-poligigi/form', [KepatuhanIdentifikasiController::class, 'form'])->name('timeout-poligigi.form');
Route::resource('timeout-poligigi', TimeOutPoliGigiController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('petugas-cucitangan/form', [KepatuhanIdentifikasiController::class, 'form'])->name('petugas-cucitangan.form');
Route::resource('petugas-cucitangan', PetugasCuciTanganController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('penggunaan-apd/form', [KepatuhanIdentifikasiController::class, 'form'])->name('penggunaan-apd.form');
Route::resource('penggunaan-apd', PenggunaanAPDController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('info-penyakitpasien/form', [KepatuhanIdentifikasiController::class, 'form'])->name('info-penyakitpasien.form');
Route::resource('info-penyakitpasien', InfoPenyakitPasienController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('boarding-timepasien/form', [KepatuhanIdentifikasiController::class, 'form'])->name('boarding-timepasien.form');
Route::resource('boarding-timepasien', BoardingTimePasienController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('antibiotic-prophylaxistype/form', [KepatuhanIdentifikasiController::class, 'form'])->name('antibiotic-prophylaxistype.form');
Route::resource('antibiotic-prophylaxistype', AntibioticProphylaxisTypeController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('antibiotik-profilaksis/form', [KepatuhanIdentifikasiController::class, 'form'])->name('antibiotik-profilaksis.form');
Route::resource('antibiotik-profilaksis', AntibiotikProfilaksisController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('penundaan-operasi-electif-30min/form', [KepatuhanIdentifikasiController::class, 'form'])->name('penundaan-operasi-electif-30min.form');
Route::resource('penundaan-operasi-electif-30min', PenundaanOperasiElectif30MinController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('penundaan-operasi-electif-1jam/form', [KepatuhanIdentifikasiController::class, 'form'])->name('penundaan-operasi-electif-1jam.form');
Route::resource('penundaan-operasi-electif-1jam', PenundaanOperasiElectif1JamController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('waktu-tanggap-seksi-sesarea/form', [KepatuhanIdentifikasiController::class, 'form'])->name('waktu-tanggap-seksi-sesarea.form');
Route::resource('waktu-tanggap-seksi-sesarea', WaktuTanggapSeksiSesareaController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kejadian-water-intrusion/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kejadian-water-intrusion.form');
Route::resource('kejadian-water-intrusion', KejadianWaterIntrusionController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pemeliharaan-alat-medis/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pemeliharaan-alat-medis.form');
Route::resource('pemeliharaan-alat-medis', PemeliharaanAlatMedisController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-vap/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-vap.form');
Route::resource('kepatuhan-vap', KepatuhanVAPController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-ido/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-ido.form');
Route::resource('kepatuhan-ido', KepatuhanIDOController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-iadp/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-iadp.form');
Route::resource('kepatuhan-iadp', KepatuhanIADPController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-isk/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-isk.form');
Route::resource('kepatuhan-isk', KepatuhanISKController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kelengkapan-resep-rawat-jalan/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kelengkapan-resep-rawat-jalan.form');
Route::resource('kelengkapan-resep-rawat-jalan', KelengkapanResepRawatJalanController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('pengelolaan-komplain-pasien/form', [KepatuhanIdentifikasiController::class, 'form'])->name('pengelolaan-komplain-pasien.form');
Route::resource('pengelolaan-komplain-pasien', PengelolaanKomplainPasienController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepuasan-pasien/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepuasan-pasien.form');
Route::resource('kepuasan-pasien', KepuasanPasienController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('waktu-tunggu-rawat-jalan-30min/form', [KepatuhanIdentifikasiController::class, 'form'])->name('waktu-tunggu-rawat-jalan-30min.form');
Route::resource('waktu-tunggu-rawat-jalan-30min', WaktuTungguRawatJalan30MinController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('waktu-rawat-jalan-under30min/form', [KepatuhanIdentifikasiController::class, 'form'])->name('waktu-rawat-jalan-under30min.form');
Route::resource('waktu-rawat-jalan-under30min', WaktuTungguRawatJalanUnder30MinController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('waktu-rawat-jalan-up60min/form', [KepatuhanIdentifikasiController::class, 'form'])->name('waktu-rawat-jalan-up60min.form');
Route::resource('waktu-rawat-jalan-up60min', WaktuTungguRawatJalanUp60MinController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-visit-dokter-spesialis/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-visit-dokter-spesialis.form');
Route::resource('kepatuhan-visit-dokter-spesialis', KepatuhanVisitDokterSpesialisController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-formularium-nasional/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-formularium-nasional.form');
Route::resource('kepatuhan-formularium-nasional', KepatuhanFormulariumNasionalController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('kepatuhan-alur-klinis/form', [KepatuhanIdentifikasiController::class, 'form'])->name('kepatuhan-alur-klinis.form');
Route::resource('kepatuhan-alur-klinis', KepatuhanAlurKlinisController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('rehospitalisasi-geriatri/form', [KepatuhanIdentifikasiController::class, 'form'])->name('rehospitalisasi-geriatri.form');
Route::resource('rehospitalisasi-geriatri', RehospitalisasiGeriatriController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('discharge-planning/form', [KepatuhanIdentifikasiController::class, 'form'])->name('discharge-planning.form');
Route::resource('discharge-planning', DischargePlanningController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('feedback-pelanggan/form', [KepatuhanIdentifikasiController::class, 'form'])->name('feedback-pelanggan.form');
Route::resource('feedback-pelanggan', FeedbackPelangganController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('perbaikan-status-cva/form', [KepatuhanIdentifikasiController::class, 'form'])->name('perbaikan-status-cva.form');
Route::resource('perbaikan-status-cva', PerbaikanStatusCVAController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

Route::get('los-gagal-jantung-akut/form', [KepatuhanIdentifikasiController::class, 'form'])->name('los-gagal-jantung-akut.form');
Route::resource('los-gagal-jantung-akut', LOSgagalJantungAkutController::class)
    ->only(['store', 'edit', 'update', 'destroy']);


    