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
        // $request->validate([
        //     'nama_pegawai' => 're    quired',
        //     'nid' => 'required|unique:pegawai',
        //     'tgl_lahir' => 'required',
        //     'tempat_lahir' => 'required',
        //     'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
        //     'status' => ['required', 'in:Belum menikah,Sudah menikah,Duda,Janda'],
        //     'masa_kerja_mulai' => 'required',
        //     'masa_kontrak' => 'required',
        // ], [
        //     'nama_pegawai.required' => 'Nama Pegwai Wajib Diisi',
        //     'nid.required' => 'NID Wwajib Diisi',
        //     'nid.unique' => 'NID ini Sudah Digunakan',
        //     'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi',
        //     'tempat_lahir.required' => 'Tempat Lahir Wajib Diisi',
        //     'jenis_kelamin.required' => 'Jenis Kelamin Wajib Diisi',
        //     'status.required' => 'Status Wajib Diisi',
        //     'masa_kerja_mulai.required' => 'Masa Kerja Mulai Wajib Diisi',
        //     'masa_kontrak.required' => 'Masa Kontrak Wajib Diisi',
        // ]);

        $areakerja = new AreaKerja();
        $areakerja->nama_pegawai = request('nama_pegawai');
        $areakerja->tempat_kerja = request('tempat_kerja');
        $areakerja->bulan = request('bulan');
        $areakerja->tahun= request('tahun');    
        $areakerja->form_upload = request('form_upload');
 


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
        if (request('bulan')) $areakerja->bulan = request('bulan');
        if (request('tahun')) $areakerja->tahun= request('tahun');
        if (request('form_upload')) $areakerja->form_upload = request('form_upload');



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
