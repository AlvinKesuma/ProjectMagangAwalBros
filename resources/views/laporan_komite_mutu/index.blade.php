@extends('layouts.app')

@section('title')
Laporan Komite Mutu
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4 text-primary">Laporan Komite Mutu</h4>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Ketepatan Jenis Antibiotik Profilaksis pada Operasi Bersih dan Bersih Terkontaminasi 
                </h5>
                <p class="text-muted mb-0">Lihat detail laporan mengenai ketepatan jenis antibiotik profilaksis.</p>
            </div>
            <a href="{{ route('antibiotik-profilaksis.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Penundaan Operasi Elektif < 30 menit
                </h5>
                <p class="text-muted mb-0">Lihat detail laporan mengenai penundaan operasi elektif kurang dari 30 menit.</p>
            </div>
            <a href="{{ route('penundaan-operasi-electif-30min.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Penundaan Operasi Elektif ≥ 1 Jam
                </h5>
                <p class="text-muted mb-0">Lihat detail laporan mengenai penundaan operasi elektif lebih dari 1 jam.</p>
            </div>
            <a href="{{ route('penundaan-operasi-electif-1jam.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Waktu Tanggap Operasi Seksio Sesarea Emergensi ≤ 30 Menit
                </h5>
                <p class="text-muted mb-0">Lihat detail laporan waktu tanggap operasi seksio sesarea emergensi ≤ 30 menit.</p>
            </div>
            <a href="{{ route('waktu-tanggap-seksi-sesarea.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Penurunan Presentasi Kejadian Water Intrussion
                </h5>
                <p class="text-muted mb-0">Lihat detail penurunan presentasi kejadian water intrussion.</p>
            </div>
            <a href="{{ route('kejadian-water-intrusion.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Ketepatan Pemeliharaan Alat Medis High, Medium & Low Risk (hanya Stetoskop, Tensimotor, Termometer dan Pen light)
                </h5>
                <p class="text-muted mb-0">Lihat detail ketepatan pemeliharaan alat medis high, medium & low risk (hanya stetoskop, tensimotor, termometer dan pen light).</p>
            </div>
            <a href="{{ route('pemeliharaan-alat-medis.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Penerapan HAIs: VAP
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan penerapan HAIs: VAP.</p>
            </div>
            <a href="{{ route('kepatuhan-vap.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Penerapan HAIs: IDO
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan penerapan HAIs: IDO.</p>
            </div>
            <a href="{{ route('kepatuhan-ido.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Penerapan HAIs: IADP
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan penerapan HAIs: IADP.</p>
            </div>
            <a href="{{ route('kepatuhan-iadp.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Penerapan HAIs: ISK
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan penerapan HAIs: ISK.</p>
            </div>
            <a href="{{ route('kepatuhan-isk.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kelengkapan Penulisan Resep Rawat Jalan (Prescribing error)
                </h5>
                <p class="text-muted mb-0">Lihat detail kelengkapan penulisan resep rawat jalan (prescribing error).</p>
            </div>
            <a href="{{ route('kelengkapan-resep-rawat-jalan.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Monitoring Penanganan Komplain Pasien Rawat Inap
                </h5>
                <p class="text-muted mb-0">Lihat detail monitoring penanganan komplain pasien rawat inap.</p>
            </div>
            <a href="{{ route('pengelolaan-komplain-pasien.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepuasan Pasien (IKM)
                </h5>
                <p class="text-muted mb-0">Lihat detail kepuasan pasien (IKM).</p>
            </div>
            <a href="{{ route('kepuasan-pasien.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Rata-rata Waktu Tunggu Rawat Jalan 30 Menit
                </h5>
                <p class="text-muted mb-0">Lihat detail rata-rata waktu tunggu rawat jalan 30 menit.</p>
            </div>
            <a href="{{ route('waktu-tunggu-rawat-jalan-30min.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Waktu Tunggu Rawat Jalan dengan Waktu Tunggu < 30 Menit
                </h5>
                <p class="text-muted mb-0">Lihat detail rata-rata waktu tunggu rawat jalan dengan waktu tunggu < 30 menit.</p>
            </div>
            <a href="{{ route('waktu-rawat-jalan-under30min.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Waktu Tunggu Rawat Jalan dengan Waktu Tunggu > 60 Menit
                </h5>
                <p class="text-muted mb-0">Lihat detail waktu tunggu rawat jalan dengan waktu tunggu > 60 Menit.</p>
            </div>
            <a href="{{ route('waktu-rawat-jalan-up60min.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Waktu Visit Dokter Spesialis Sebelum jam 14:00 WIB
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan waktu visit dokter spesialis sebelum jam 14:00 WIB.</p>
            </div>
            <a href="{{ route('kepatuhan-visit-dokter-spesialis.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Penggunaan Formularium Nasional
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan penggunaan formularium nasional.</p>
            </div>
            <a href="{{ route('kepatuhan-formularium-nasional.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kepatuhan Terhadap Alur Klinis (Clinical Pathway)
                </h5>
                <p class="text-muted mb-0">Lihat detail kepatuhan terhadap alur klinis (clinical pathway).</p>
            </div>
            <a href="{{ route('kepatuhan-alur-klinis.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Presentasi Rawat Inap Ulang (Rehospitalisasi) Pasien Geriatri
                </h5>
                <p class="text-muted mb-0">Lihat detail presentasi rawat inap ulang (Rehospitalisasi) pasien geriatri.</p>
            </div>
            <a href="{{ route('rehospitalisasi-geriatri.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Kesesuaian Discharge Planning DPJP dengan LOS Pasien
                </h5>
                <p class="text-muted mb-0">Lihat detail kesesuaian discharge planning DPJP dengan LOS pasien.</p>
            </div>
            <a href="{{ route('discharge-planning.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    Rasio Negative Feedback Customer vs Seluruh Feedback yang diterima
                </h5>
                <p class="text-muted mb-0">Lihat detail rasio negative feedback customer vs seluruh feedback yang diterima.</p>
            </div>
            <a href="{{ route('feedback-pelanggan.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    % Pasien CVA infark dan CVA hemorrhagik dengan perbaikan status fisiologis atau kesadaran dibandingkan saat masuk ranap 
                </h5>
                <p class="text-muted mb-0">Lihat detail % Pasien CVA infark dan CVA hemorrhagik dengan perbaikan status fisiologis atau kesadaran dibandingkan saat masuk ranap.</p>
            </div>
            <a href="{{ route('perbaikan-status-cva.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>

    <div class="card mb-4 shadow-sm searchable-item">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="form-title text-secondary fw-bold">
                    LOS Gagal Jantung Akut ≤ 7 Hari
                </h5>
                <p class="text-muted mb-0">Lihat detail LOS gagal jantung akut ≤ 7 hari.</p>
            </div>
            <a href="{{ route('los-gagal-jantung-akut.index') }}" class="btn btn-outline-primary">Detail</a>
        </div>
    </div>
</div>
@endsection
