<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    function index(){
        $data['list_absensi'] = Absensi::all();
        return view('Admin.Absensi.index', $data);
    }
    function create()
    {
        return view('Admin.Absensi.create');
    }

    function store(Request $request)
    {
        $request->validate([
        ]);

        $absensi = new Absensi();
        $absensi->nama_pegawai = request('nama_pegawai');
        // $absensi->id_pegawai = request('id_pegawai');
        $absensi->tgl_lahir = request('tgl_lahir');
        $absensi->tempat_lahir = request('tempat_lahir');
        $absensi->jenis_kelamin = request('jenis_kelamin');
        $absensi->no_hp = request('no_hp');
        $absensi->from_aplod = request('from_aplod');
        $absensi->kriteria = request('kriteria');
        

        $absensi->handLeUploadFoto();
        $absensi->save();

        return redirect('Absensi')->with('success', 'Data Berhasil Di Simpan');
    }


    function show(Absensi $absensi)
    {
        $data['absensi'] = $absensi;
        return view('Admin.Absensi.show', $data);
    }


    function edit(Absensi $absensi)
    {
        $data['list_absensi'] = Absensi::all();
        $data['absensi'] = $absensi;
        return view('Admin.Absensi.edit', $data);
    }
    function destroy(Absensi $absensi){
        $absensi->delete();

        return redirect('Admin.Absensi')->with('danger', 'Data Berhasil Dihapus');
    }
}
