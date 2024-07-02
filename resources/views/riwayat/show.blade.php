@extends('index')

@section('content')
    <h2 class="text-center mb-4">Rekomendasi Serum</h2>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ asset($serum->foto_serum) }}" class="card-img-top" alt="{{ $serum->nama_serum }}"
                    style="height: 300px; width: auto; object-fit: contain;">
                <div class="card-body">
                    <h3 class="card-title text-center"><b>{{ $serum->nama_serum }}</b></h3>
                    <p class="card-text">{{ $serum->deskripsi }}</p>
                </div>
            </div>
        </div>
    </div>


    <h2 class="mt-5">Animasi</h2>
    <div class="row justify-content-center">
        @foreach ($animasi as $item)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <video autoplay loop muted playsinline class="embed-responsive-item" style="width: 100%;">
                                <source src="{{ asset($item->video_animasi) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <p class="card-text mt-3">{{ $item->narator }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="mt-5">Hasil Perhitungan Certainty Factor</h2>
    <style>
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
    </style>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Serum</th>
                <th>Persentase Solusi</th>
                <th>Detail Iterasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serumResults as $serum)
                <tr>
                    <td>{{ $serum->nama_serum }}</td>
                    <td>{{ $serum->persentase * 100 }}%</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#iterasiModal{{ $serum->kode_serum }}">
                            Detail Iterasi
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('riwayat.index') }}" class="btn btn-info">Kembali</a>
    @foreach ($serumResults as $serum)
        @php
            $serumDetail = $serumAll->firstWhere('kode_serum', $serum->kode_serum);
        @endphp

        <!-- Modal for Iterasi CF -->
        <div class="modal fade" id="iterasiModal{{ $serum->kode_serum }}" tabindex="-1" role="dialog"
            aria-labelledby="iterasiModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="iterasiModalLabel">Detail Iterasi CF Serum:
                            {{ $serum->nama_serum }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row justify-content-center align-items-center mb-4">
                            <div class="col-md-10">
                                <div class="card text-center ">
                                    <img src="{{ asset($serumDetail->foto_serum) }}" class="card-img-top img-fluid mt-4"
                                        alt="{{ $serumDetail->nama_serum }}" style="height: 300px; object-fit: cover;">
                                    <div class="card-body">
                                        <h3 class="card-title"><b>{{ $serumDetail->nama_serum }}</b></h3>
                                        <p class="card-text">{{ $serumDetail->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Kode Gejala</th>
                                    <th>Nama Gejala</th>
                                    <th>CF User</th>
                                    <th>CF Pengetahuan</th>
                                    {{-- <th>CF Hasil</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serum->iterasi_cf as $iterasi)
                                    <tr>
                                        <td>{{ $iterasi->kode_gejala }}</td>
                                        <td>{{ $iterasi->nama_gejala }}</td>
                                        <td>{{ $iterasi->cf_user }}</td>
                                        <td>{{ $iterasi->cf_pengetahuan }}</td>
                                        {{-- <td>{{ $iterasi->cf_hasil }}</td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    @endforeach
@endsection
