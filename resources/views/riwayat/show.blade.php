@extends('index')

@section('content')
    <div class="container mt-5">
        <h2>Hasil Perhitungan Certainty Factor</h2>

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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#iterasiModal{{ $serum->kode_serum }}">
                                Detail Iterasi
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @foreach ($serumResults as $serum)

        <!-- Modal for Iterasi CF -->
        <div class="modal fade" id="iterasiModal{{ $serum->kode_serum }}" tabindex="-1" role="dialog" aria-labelledby="iterasiModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="iterasiModalLabel">Detail Iterasi CF Serum: {{ $serum->nama_serum }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
    </div>
@endsection
