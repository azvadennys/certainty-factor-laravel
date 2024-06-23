@extends('index')

@section('content')
    <div class="container">
        <h1>Serums</h1>
        <a href="{{ route('serums.create') }}" class="btn btn-primary">Add Serum</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Kode Serum</th>
                    <th>Nama Serum</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($serums as $serum)
                    <tr>
                        <td>{{ $serum->kode_serum }}</td>
                        <td>{{ $serum->nama_serum }}</td>
                        <td>{{ $serum->deskripsi }}</td>
                        <td class="text-center">
                            @if ($serum->foto_serum)
                                <img src="{{ asset($serum->foto_serum) }}" alt="{{ $serum->nama_serum }}" height="100">
                            @else
                                No image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('serums.show', $serum->kode_serum) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('serums.edit', $serum->kode_serum) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('serums.destroy', $serum->kode_serum) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
