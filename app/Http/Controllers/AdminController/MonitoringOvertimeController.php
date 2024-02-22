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
        $request->validate([]);

        $monitoringovertime = new MonitoringOvertime();
        $monitoringovertime->nama_pegawai = request('nama_pegawai');
        $monitoringovertime->tgl_lahir = request('tgl_lahir');
        $monitoringovertime->tempat_lahir = request('tempat_lahir');
        $monitoringovertime->jenis_kelamin = request('jenis_kelamin');
        $monitoringovertime->jam_lembur = request('jam_lembur');

        $monitoringovertime->save();

        $monitoringovertime->handLeUploadFoto();
        return redirect('MonitoringOvertime')->with('success', 'Data Berhasil Di Simpan');
    }


    function show(MonitoringOvertime $monitoringovertime)
    {
        $data['monitoringovertime'] = $monitoringovertime;
        return view('Admin.MonitoringOvertime.show', $data);
    }

    function edit(MonitoringOvertime $monitoringovertime)
    {
        $data['list_monitoringovertime'] = MonitoringOvertime::all();
        $data['monitoringovertime'] = $monitoringovertime;
        return view('Admin.MonitoringOvertime.edit', $data);
    }

    function destroy(MonitoringOvertime $monitoringovertime)
    {
        $monitoringovertime->delete();

        return redirect('MonitoringOvertime')->with('danger', 'Data Berhasil Dihapus');
    }
}
