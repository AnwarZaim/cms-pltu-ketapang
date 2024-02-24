<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\MonitoringOvertime;
use Illuminate\Http\Request;

class MonitoringOvertimeController extends Controller
{
    function index()
    {
        $data['list_monitoringovertime'] = MonitoringOvertime::all();
        return view('Admin.MonitoringOvertime.index', $data);
    }

    function create()
    {
        return view('Admin.MonitoringOvertime.create');
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

        $monitoringovertime = new MonitoringOvertime();
        $monitoringovertime->nama_pegawai = request('nama_pegawai');
        $monitoringovertime->tgl_lahir = request('tgl_lahir');
        $monitoringovertime->tempat_lahir = request('tempat_lahir');
        $monitoringovertime->jenis_kelamin = request('jenis_kelamin');
        $monitoringovertime->jam_lembur = request('jam_lembur');



        $monitoringovertime->handLeUploadFoto();
        return redirect('MonitoringOvertime')->with('success', 'Data Berhasil Di Simpan');
    }
    // function show(Pegawai $absensi)
    // {
    //     $data['pegawai'] = $absensi;
    //     return view('Admin.DataPegawai.show', $data);
    // }
    public function show($id)
    {
        return view('Admin.MonitoringOvertime.show', [
            'monitoringovertime' => MonitoringOvertime::findOrFail($id),
        ]);
    }
    // function edit(Pegawai $absensi)
    // {
    //     $data['list_pegawai'] = Pegawai::all();
    //     $data['pegawai'] = $absensi;
    //     return view('Admin.DataPegawai.edit', $data);
    // }

    public function edit($id)
    {
        return view('Admin.MonitoringOvertime.edit', [
            'monitoringovertime' => MonitoringOvertime::findOrFail($id),
        ]);
    }

    function destroy(MonitoringOvertime $monitoringovertime)
    {
        $monitoringovertime->delete();

        return redirect('Admin.MonitoringOvertime')->with('danger', 'Data Berhasil Dihapus');
    }
}
