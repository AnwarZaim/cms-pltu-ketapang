<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.Datapegawai.index', $data);
    }

    function create()
    {
        return view('Admin.Datapegawai.create');
    }


    function store(Request $request)
    {
        // $request->validate([
        //     'nama_pegawai' => 'required',
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

        $pegawai = new Pegawai();
        $pegawai->nama_pegawai = request('nama_pegawai');
        $pegawai->nid = request('nid');
        $pegawai->tgl_lahir = request('tgl_lahir');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->status = request('status');
        $pegawai->masa_kerja_mulai = request('masa_kerja_mulai');
        $pegawai->masa_kerja_selesai = request('masa_kerja_selesai');
        $pegawai->masa_kontrak = request('masa_kontrak');

        $pegawai->handLeUploadFoto();
        $pegawai->save();

        return redirect('DataPegawai')->with('success', 'Data Berhasil Di Simpan');
    }
    function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('Admin.DataPegawai.show', $data);
    }
    function edit(Pegawai $pegawai)
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['pegawai'] = $pegawai;
        return view('Admin.DataPegawai.edit', $data);
    }
    function update(Pegawai $pegawai)
    {


        if (request('nama_pegawai')) $pegawai->nama_pegawai = request('nama_pegawai');
        if (request('nid')) $pegawai->nid = request('nid');
        if (request('tgl_lahir')) $pegawai->tgl_lahir = request('tgl_lahir');
        if (request('tempat_lahir')) $pegawai->tempat_lahir = request('tempat_lahir');
        if (request('jenis_kelamin')) $pegawai->jenis_kelamin = request('jenis_kelamin');
        if (request('status')) $pegawai->status = request('status');
        if (request('masa_kerja_mulai')) $pegawai->masa_kerja_mulai = request('masa_kerja_mulai');
        if (request('masa_kerja_mulai')) $pegawai->masa_kerja_selesai = request('masa_kerja_selesai');
        if (request('masa_kontrak')) $pegawai->masa_kontrak = request('masa_kontrak');

        if (request('foto')) $pegawai->handLeUploadFoto();
        $pegawai->save();
    }

    function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect('Admin.DataPegawai')->with('danger', 'Data Berhasil Dihapus');
    }
}
