@extends('index')
@push('custome_head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
    <h1 class="text-center mb-4">Tambah Animasi</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="{{ route('animasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="video_animasi">Video Animasi</label>
                    <input type="file" class="form-control @error('video_animasi') is-invalid @enderror"
                        id="video_animasi" name="video_animasi">
                    @error('video_animasi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="narator">Narator</label>
                    <textarea class="form-control @error('narator') is-invalid @enderror" id="narator" name="narator">{{ old('narator') }}</textarea>
                    @error('narator')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="id_serum">ID Serum:</label>
                    <select name="id_serum[]" id="id_serum" class="form-control js-example-basic-multiple"
                        multiple="multiple" required>
                        @foreach ($serum as $index)
                            <option value="{{ $index->kode_serum }}"
                                {{ collect(old('id_serum'))->contains($index->kode_serum) ? 'selected' : '' }}>
                                {{ $index->kode_serum }} | {{ $index->nama_serum }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_serum')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection
@push('custome_js')
    <!-- Initialize Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
