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

    <div class="card mb-4 shadow-sm">
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

    <div class="card mb-4 shadow-sm">
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

    <div class="card mb-4 shadow-sm">
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
</div>
@endsection
