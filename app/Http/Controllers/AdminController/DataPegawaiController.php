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
        $pegawai->pendidikan = request('pendidikan');
        $pegawai->sekolah_universitas= request('sekolah_universitas');
        $pegawai->alamat_ktp = request('alamat_ktp');
        $pegawai->alamat_domisili = request('alamat_domisili');
        $pegawai->no_hp = request('no_hp');
        $pegawai->email = request('email');
        $pegawai->ftk_nonftk = request('ftk_nonftk');
        $pegawai->jabatan = request('jabatan');
        $pegawai->klasifikasi_bidang= request('klasifikasi_bidang');

        $pegawai->handLeUploadFoto();
        $pegawai->save();

        return redirect('DataPegawai')->with('success', 'Data Berhasil Di Simpan');
    }
    // function show(Pegawai $pegawai)
    // {
    //     $data['pegawai'] = $pegawai;
    //     return view('Admin.DataPegawai.show', $data);
    // }
    public function show($id)
    {
        return view('Admin.DataPegawai.show', [
            'pegawai' => Pegawai::findOrFail($id),
        ]);
    }
    // function edit(Pegawai $pegawai)
    // {
    //     $data['list_pegawai'] = Pegawai::all();
    //     $data['pegawai'] = $pegawai;
    //     return view('Admin.DataPegawai.edit', $data);
    // }

    public function edit($id)
    {
        return view('Admin.DataPegawai.edit', [
            'pegawai' => Pegawai::findOrFail($id),
        ]);
    }


    function update($id)
    {
        $pegawai = Pegawai::find($id);
        if (request('nama_pegawai')) $pegawai->nama_pegawai = request('nama_pegawai');
        if (request('nid')) $pegawai->nid = request('nid');
        if (request('tgl_lahir')) $pegawai->tgl_lahir = request('tgl_lahir');
        if (request('tempat_lahir')) $pegawai->tempat_lahir = request('tempat_lahir');
        if (request('jenis_kelamin')) $pegawai->jenis_kelamin = request('jenis_kelamin');
        if (request('status')) $pegawai->status = request('status');
        if (request('pendidikan')) $pegawai->pendidikan = request('pendidikan');
        if (request('sekolah_universitas')) $pegawai->sekolah_universitas = request('sekolah_universitas');
        if (request('alamat_ktp')) $pegawai->alamat_ktp = request('alamat_ktp');
        if (request('alamat_domisili')) $pegawai->alamat_domisil = request('alamat_domisili');
        if (request('no_hp')) $pegawai->no_hp = request('no_hp');
        if (request('email')) $pegawai->email = request('email');
        if (request('ftk_nonftk')) $pegawai->alamat_ktp = request('ftk_nonftk');
        if (request('jabatan')) $pegawai->alamat_ktp = request('jabatan');
        if (request('klasifikasi_bidang')) $pegawai->alamat_ktp = request('klasifikasi_bidang');

        $pegawai->save();
        if (request('foto')) $pegawai->handLeUploadFoto();

        return redirect('DataPegawai')->with('success', 'Berhasil di Edit');
    }

    // function destroy(Pegawai $pegawai)
    // {
    //     $pegawai->delete();

    //     return redirect('DataPegawai')->with('danger', 'Data Berhasil Dihapus');
    // }

    function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->handleDelete();
        $pegawai->delete();
        return redirect('DataPegawai')->with('danger', 'Data Berhasil Dihapus');
    }
}
