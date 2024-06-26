@extends('index')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Certainty Factor Calculation</h1>
        <form method="post" action="{{ route('calculate.cf') }}">
            @csrf
            @foreach ($gejala as $item)
                <div class="form-group row">
                    <label for="gejala_{{ $item->kode_gejala }}"
                        class="col-sm-2 col-form-label">({{ $item->kode_gejala }}){{ $item->nama_gejala }}:</label>
                    <div class="col-sm-10">
                        <select id="gejala_{{ $item->kode_gejala }}" name="gejala[{{ $item->kode_gejala }}]"
                            class="form-control">
                            <option value="0">0 (Tidak Ada)</option>
                            <option value="0.2">0.2 (Tidak Tahu)</option>
                            <option value="0.4">0.4 (Mungkin)</option>
                            <option value="0.6">0.6 (Kemungkinan Besar)</option>
                            <option value="0.8">0.8 (Hampir Pasti)</option>
                            <option value="1">1 (Pasti)</option>
                        </select>
                    </div>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Hitung CF</button>
        </form>
    </div>
@endsection
