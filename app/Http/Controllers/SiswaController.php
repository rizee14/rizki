<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function tampil() {
        $siswa = Siswa::all();
        return view('siswa.tampil', compact('siswa'));
    }

    public function tambah() {
        return view('siswa.tambah');
    }

    public function submit(Request $request) {
        $siswa = new Siswa();
        $siswa->nama = $request->nama;
        $siswa->tempat_pkl = $request->tempat_pkl;
        $siswa->tanggal_berangkat = $request->tanggal;
        $siswa->save();

        return redirect()->route('siswa.tampil');
    }

    public function edit($id) {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->tempat_pkl = $request->tempat_pkl;
        $siswa->tanggal_berangkat = $request->tanggal;
        $siswa->save();

        return redirect()->route('siswa.tampil');
    }

    public function delete($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.tampil');
    }
}
