@extends('layout')

@section('konten')

<h4>Tambah Data</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <div class="mb-2">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control">
    </div>
    <div class="mb-2">
        <label for="tempat_pkl">Tempat PKL</label>
        <input type="text" name="tempat_pkl" id="tempat_pkl" class="form-control">
    </div>
    <div class="mb-2">
        <label for="tanggal">Tanggal Berangkat</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
