@extends('index')
@push('custome_head')
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
@endpush
@section('content')
    <div class="container">
        <h2 class="text-center">Konsultasi Rekomendasi Serum Wajah Somethinc</h2>
        <p class="text-center">Selamat datang di layanan konsultasi rekomendasi serum wajah dari Somethinc. Kami hadir untuk
            membantu Anda
            menemukan serum yang tepat sesuai dengan masalah kulit yang Anda alami. Dengan menjawab beberapa pertanyaan
            sederhana mengenai kondisi kulit Anda, kami dapat memberikan rekomendasi produk yang paling sesuai untuk
            kebutuhan Anda.</p>
        <form method="post" action="{{ route('calculate.cf') }}" id="cfForm">
            @csrf
            <div class="table-responsive">
                <table class="table table-bordered " style="border:#388da8">
                    <thead style="--bs-table-bg: #388da8; --bs-table-color:white;" class="text-white">
                        <tr>
                            <th class="text-center">Kode Gejala</th>
                            <th>Nama Gejala</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gejala as $item)
                            <tr>
                                <td class="text-center"><b>{{ $item['kode_gejala'] }}</b></td>
                                <td>{{ ucwords($item['nama_gejala']) }}</td>
                                <td>
                                    <select id="gejala_{{ $item['kode_gejala'] }}" name="gejala[{{ $item['kode_gejala'] }}]"
                                        class="form-control cf-select">
                                        <option value="0">Tidak Ada</option>
                                        <option value="0.2">Tidak Tahu</option>
                                        <option value="0.4">Mungkin</option>
                                        <option value="0.6">Kemungkinan Besar</option>
                                        <option value="0.8">Hampir Pasti</option>
                                        <option value="1">Pasti</option>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#detailModal" data-kode="{{ $item['kode_gejala'] }}"
                                        data-nama="{{ ucwords($item['nama_gejala']) }}"
                                        data-deskripsi="{{ $item['deskripsi_gejala'] }}"
                                        data-foto="{{ asset($item['foto_gejala']) }}">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Lanjutkan Konsultasi</button>
            <a href="{{ route('home') }}" class="btn btn-info">Kembali</a>
        </form>
    </div>
    <style>
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - 1rem);
        }
    </style>
    <!-- Modal -->
    <div class="modal modal-lg fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--accent-color);">
                    <h5 class="modal-title text-white" id="detailModalLabel">Detail Gejala</h5>

                </div>
                <div class="modal-body">
                    <p><strong>Kode Gejala:</strong> <span id="modalKodeGejala"></span></p>
                    <p><strong>Nama Gejala:</strong> <span id="modalNamaGejala"></span></p>
                    <p><strong>Deskripsi Gejala:</strong> <span id="modalDeskripsiGejala"></span></p>
                    <p><strong>Foto Gejala:</strong></p>
                    <img id="modalFotoGejala" src="" alt="Foto Gejala" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Peringatan -->
    <div class="modal fade" id="peringatanModal" tabindex="-1" role="dialog" aria-labelledby="peringatanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #dc3545;">
                    <h5 class="modal-title text-white" id="peringatanModalLabel"><b>Peringatan!</b></h5>

                </div>
                <div class="modal-body" id="peringatanModalBody">
                    <!-- Pesan akan diisi oleh JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="closePeringatanModal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custome_js')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        $('#detailModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var kode = button.data('kode');
            var nama = button.data('nama');
            var deskripsi = button.data('deskripsi');
            var foto = button.data('foto');
            var modal = $(this);
            modal.find('#modalKodeGejala').text(kode);
            modal.find('#modalNamaGejala').text(nama);
            modal.find('#modalDeskripsiGejala').text(deskripsi);
            modal.find('#modalFotoGejala').attr('src', foto);
        });

        // Form validation
        document.getElementById('cfForm').addEventListener('submit', function(event) {
            var cfSelects = document.querySelectorAll('.cf-select');
            var validCount = 0;

            cfSelects.forEach(function(select) {
                if (parseFloat(select.value) > 0) {
                    validCount++;
                }
            });
            var totalGejala = cfSelects.length;
            if (validCount < 3) {
                event.preventDefault();
                document.getElementById('peringatanModalBody').innerHTML = '<p>Silakan pilih setidaknya 3 gejala dengan kondisi selain <b>Tidak Ada</b> untuk melanjutkan.</p>';
                $('#peringatanModal').modal('show');
            } else if (validCount === totalGejala) {
                event.preventDefault();
                document.getElementById('peringatanModalBody').innerHTML = '<p>Pemilihan gejala <b>Tidak Valid</b>. Silakan pilih sesuai dengan keadaan untuk melanjutkan.</p>';
                $('#peringatanModal').modal('show');
            }
        });
        // Close modal on OK button click
        document.getElementById('closePeringatanModal').addEventListener('click', function() {
            $('#peringatanModal').modal('hide');
        });
    </script>
@endpush
