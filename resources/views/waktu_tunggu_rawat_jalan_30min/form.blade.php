<form action="{{ route('waktu_tunggu_rawat_jalan_30min.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="unit" class="form-label">Unit</label>
                <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit" name="unit" value="{{ $unit }}" readonly>
                @error('unit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-6 col-12">
            <div class="form-group">
                <label for="num" class="form-label">Numerator</label>
                <input type="number" step="0.1" class="form-control @error('num') is-invalid @enderror" id="num" name="num" value="{{ $data->num }}" max="4.9" required>
                @error('num')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="denum" class="form-label">Denominator</label>
        <input type="number" step="0.1" class="form-control @error('denum') is-invalid @enderror" id="denum" name="denum" value="{{ $data->denum }}" max="4.9" required>
        @error('denum')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="year" class="form-label">Tahun</label>
        <select class="form-select @error('year') is-invalid @enderror" id="year" name="year" required>
            <option value="">Pilih Tahun</option>
            <option value="2023" {{ $data->year == 2023 ? 'selected' : '' }}>2023</option>
            <option value="2024" {{ $data->year == 2024 ? 'selected' : '' }}>2024</option>
        </select>
        @error('year')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12 d-flex justify-content-end">
        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
        <button type="button" class="btn btn-secondary me-1 mb-1" data-bs-dismiss="modal">Batal</button>
    </div>
</form>
