<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AreaKerja;
use Illuminate\Http\Request;

class AreaKerjaController extends Controller
{
    function index()
    {
        $data['list_areakerja'] = AreaKerja::all();
        return view('Admin.AreaKerja.index', $data);
    }

    function create()
    {
        return view('Admin.AreaKerja.create');
    }


    function store(Request $request)
    {


        $areakerja = new AreaKerja();
        $areakerja->nama_pegawai = request('nama_pegawai');
        $areakerja->tempat_kerja = request('tempat_kerja');
        $areakerja->tanggal = request('tanggal');
        $areakerja->foto = request('foto');



        $areakerja->handLeUploadFoto();
        $areakerja->save();

        return redirect('AreaKerja')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show($id)
    {
        return view('Admin.AreaKerja.show', [
            'areakerja' => AreaKerja::findOrFail($id),
        ]);
    }


    public function edit($id)
    {
        return view('Admin.AreaKerja.edit', [
            'areakerja' => AreaKerja::findOrFail($id),
        ]);
    }


    function update($id)
    {
        $areakerja = AreaKerja::find($id);
        if (request('nama_pegawai')) $areakerja->nama_pegawai = request('nama_pegawai');
        if (request('tempat_kerja')) $areakerja->tempat_kerja = request('tempat_kerja');
        if (request('tanggal')) $areakerja->tanggal = request('tanggal');
        if (request('foto')) $areakerja->foto = request('foto');



        $areakerja->save();

        if (request('foto')) $areakerja->handLeUploadFoto();

        return redirect('AreaKerja')->with('success', 'Berhasil di Edit');
    }


    function destroy($id)
    {
        $areakerja = AreaKerja::find($id);
        $areakerja->handleDelete();
        $areakerja->delete();
        return redirect('AreaKerja')->with('danger', 'Data Berhasil Dihapus');
    }
}
