@extends('layout')

@section('konten')

<h4>Edit Data</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
    <label>Tempat PKL</label>
    <input type="text" name="tempat_pkl" value="{{ $siswa->tempat_pkl }}" class="form-control mb-2">
    <label>Tanggal Berangkat</label>
    <input type="date" name="tanggal" value="{{ $siswa->tanggal_berangkat }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection