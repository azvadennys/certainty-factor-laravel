@extends('index')

@section('content')
    <h1 class="text-center mb-4">Edit Serum</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{ route('serums.update', $serum->kode_serum) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="kode_serum" class="form-label">Kode Serum</label>
                    <input type="text" name="kode_serum" class="form-control" id="kode_serum"
                        value="{{ old('kode_serum', $serum->kode_serum) }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_serum" class="form-label">Nama Serum</label>
                    <input type="text" name="nama_serum" class="form-control" id="nama_serum"
                        value="{{ old('nama_serum', $serum->nama_serum) }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi">{{ old('deskripsi', $serum->deskripsi) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="foto_serum" class="form-label">Foto Serum</label>
                    <input type="file" name="foto_serum" class="form-control-file" id="foto_serum">
                    <h6 class="text-secondary">*Kosongkan jika tidak ingin ganti foto</h6>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
@endsection
