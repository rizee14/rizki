@extends('layout')

@section('konten')

<div class="d-flex mb-3">
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah Siswa</a>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat PKL</th>
                <th>Tanggal Berangkat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $no => $data)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->tempat_pkl }}</td>
                <td>{{ $data->tanggal_berangkat }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('siswa.delete', $data->id) }}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
