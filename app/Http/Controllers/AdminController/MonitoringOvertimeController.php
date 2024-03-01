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


        $monitoringovertime = new MonitoringOvertime();
        $monitoringovertime->nama_pegawai = request('nama_pegawai');
        $monitoringovertime->tgl_lahir = request('tgl_lahir');
        $monitoringovertime->tempat_lahir = request('tempat_lahir');
        $monitoringovertime->jenis_kelamin = request('jenis_kelamin');
        $monitoringovertime->jam_lembur = request('jam_lembur');



        $monitoringovertime->handLeUploadFoto();
        $monitoringovertime->save();

        return redirect('MonitoringOvertime')->with('success', 'Data Berhasil Di Simpan');
    }

    public function show($id)
    {
        return view('Admin.MonitoringOvertime.show', [
            'monitoringovertime' => MonitoringOvertime::findOrFail($id),
        ]);
    }


    public function edit($id)
    {
        return view('Admin.MonitoringOvertime.edit', [
            'monitoringovertime' => MonitoringOvertime::findOrFail($id),
        ]);
    }


    function update($id)
    {
        $monitoringovertime = MonitoringOvertime::find($id);
        if (request('nama_pegawai')) $monitoringovertime->nama_pegawai = request('nama_pegawai');
        if (request('tgl_lahir')) $monitoringovertime->tgl_lahir = request('tgl_lahir');
        if (request('tempat_lahir')) $monitoringovertime->tempat_lahir = request('tempat_lahir');
        if (request('jenis_kelamin')) $monitoringovertime->jenis_kelamin = request('jenis_kelamin');
        if (request('jam_lembur')) $monitoringovertime->jam_lembur = request('jam_lembur');



        $monitoringovertime->save();

        if (request('foto')) $monitoringovertime->handLeUploadFoto();

        return redirect('MonitoringOvertime')->with('success', 'Berhasil di Edit');
    }


    function destroy($id)
    {
        $monitoringovertime = MonitoringOvertime::find($id);
        $monitoringovertime->handleDelete();
        $monitoringovertime->delete();
        return redirect('MonitoringOvertime')->with('danger', 'Data Berhasil Dihapus');
    }
}
