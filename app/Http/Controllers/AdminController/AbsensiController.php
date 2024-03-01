<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    function index()
    {
        $data['list_absensi'] = Absensi::all();
        return view('Admin.Absensi.index', $data);
    }

    function create()
    {
        return view('Admin.Absensi.create');
    }


    function store(Request $request)
    {
        $absensi = new absensi();
        $absensi->nama_pegawai = request('nama_pegawai');
        $absensi->kode_prk = request('kode_prk');
        $absensi->nik = request('nik');
        $absensi->status = request('status');
        $absensi->bagian = request('bagian');


        $absensi->handLeUploadFoto();
        $absensi->save();

        return redirect('Absensi')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show($id)
    {
        return view('Admin.Absensi.show', [
            'absensi' => Absensi::findOrFail($id),
        ]);
    }


    public function edit($id)
    {
        return view('Admin.Absensi.edit', [
            'absensi' => Absensi::findOrFail($id),
        ]);
    }


    function update($id)
    {
        $absensi = absensi::find($id);
        if (request('nama_pegawai')) $absensi->nama_pegawai = request('nama_pegawai');
        if (request('kode_prk')) $absensi->kode_prk = request('kode_prk');
        if (request('nik')) $absensi->nik = request('nik');
        if (request('status')) $absensi->status = request('status');
        if (request('bagian')) $absensi->jenis_kelamin = request('jenis_kelamin');


        $absensi->save();
        if (request('foto')) $absensi->handLeUploadFoto();

        return redirect('Absensi')->with('success', 'Berhasil di Edit');
    }


    function destroy($id)
    {
        $absensi = absensi::find($id);
        $absensi->handleDelete();
        $absensi->delete();
        return redirect('Absensi')->with('danger', 'Data Berhasil Dihapus');
    }
}
