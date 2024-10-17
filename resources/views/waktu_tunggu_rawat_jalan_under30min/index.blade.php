@extends('layouts.app')

@section('title')
Data Waktu Tunggu Rawat Jalan dengan Waktu Tunggu < 30 Menit
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <!-- Toast for success messages -->
            <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
                <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                </div>
            </div>

            @if(session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var toast = new bootstrap.Toast(document.getElementById('successToast'));
                        toast.show();
                    });
                </script>
            @endif

            <div class="d-flex justify-content-between mb-4">
                <h4>Data Waktu Tunggu Rawat Jalan dengan Waktu Tunggu < 30 Menit</h4>
                <!-- Button trigger modal for creating data -->
                <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#basicModal"
                    onclick="openCreateModal()"
                >
                    Tambah Data
                </button>
            </div>

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Unit</th>
                            <th>Num</th>
                            <th>Denum</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->unit }}</td>
                                <td>{{ number_format($item->num, 1) }}</td>
                                <td>{{ number_format($item->denum, 1) }}</td>
                                <td>{{ $item->year }}</td>
                                <td>
                                    <!-- Button trigger modal for editing data -->
                                    <button
                                        type="button"
                                        class="btn btn-warning btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#basicModal"
                                        onclick="openEditModal({{ $item }})"
                                    >
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm delete-button" data-id="{{ $item->id }}">Hapus</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Create/Edit -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Form Data Waktu Tunggu Rawat Jalan dengan Waktu Tunggu < 30 Menit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formModal" action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') 
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" id="unit" name="unit" class="form-control" placeholder="Masukkan Unit" readonly>
                        </div>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col">
                            <label for="num" class="form-label">Num</label>
                            <input type="number" step="0.1" id="num" name="num" class="form-control" placeholder="Masukkan Num" required>
                        </div>
                        <div class="col">
                            <label for="denum" class="form-label">Denum</label>
                            <input type="number" step="0.1" id="denum" name="denum" class="form-control" placeholder="Masukkan Denum" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Tahun</label>
                        <select id="year" name="year" class="form-select" required>
                            <option value="">Pilih Tahun</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle delete button click
        const deleteButtons = document.querySelectorAll('.delete-button');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const itemId = this.getAttribute('data-id');
                const confirmDeleteButton = document.getElementById('confirmDeleteButton');

                // Open confirmation modal
                var confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
                confirmDeleteModal.show();

                // Set event for confirm delete button
                confirmDeleteButton.onclick = function() {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = "{{ url('waktu-rawat-jalan-under30min') }}/" + itemId;

                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = '{{ csrf_token() }}';
                    form.appendChild(csrfInput);

                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'DELETE';
                    form.appendChild(methodInput);

                    document.body.appendChild(form);
                    form.submit();
                };
            });
        });
    });

    function openCreateModal() {
        document.getElementById('formModal').reset();
        document.getElementById('formModal').action = "{{ route('waktu-rawat-jalan-under30min.store') }}";
        document.getElementById('formModal').querySelector('[name="_method"]').value = "POST";
        document.getElementById('exampleModalLabel1').innerText = "Tambah Waktu Tunggu Rawat Jalan dengan Waktu Tunggu < 30 Menit";
        
        // Autofill unit field with "Mutu"
        document.getElementById('unit').value = "Mutu";
    }

    function openEditModal(data) {
        document.getElementById('formModal').reset();
        document.getElementById('formModal').action = "{{ url('waktu-rawat-jalan-under30min') }}/" + data.id;
        document.getElementById('formModal').querySelector('[name="_method"]').value = "PUT";
        document.getElementById('exampleModalLabel1').innerText = "Edit Waktu Tunggu Rawat Jalan dengan Waktu Tunggu < 30 Menit";
        
        document.getElementById('unit').value = data.unit;
        document.getElementById('num').value = data.num;
        document.getElementById('denum').value = data.denum;
        document.getElementById('year').value = data.year;
    }
</script>
@endsection
