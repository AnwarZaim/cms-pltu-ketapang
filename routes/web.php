<?php

use App\Http\Controllers\AdminController\AbsensiController;
use App\Http\Controllers\AdminController\AreaKerjaController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\DataPegawaiController;
use App\Http\Controllers\AdminController\MonitoringOvertimeController;
use App\Models\Absensi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('Dashboard', [DashboardController::class, 'index']);



//Data Pegawai//
// Route::get('DataPegawai',[DataPegawaiController::class,'index']);
// Route::get('DataPegawai/create',[DataPegawaiController::class,'create']);
// Route::post('DataPegawai',[DataPegawaiController::class,'store']);
// Route::get('DataPegawai/{pegawai}',[DataPegawaiController::class,'show']);
// Route::get('DataPegawai/{pegawai}/edit',[DataPegawaiController::class,'edit']);
// Route::put('DataPegawai/{pegawai}',[DataPegawaiController::class,'update']);
// Route::delete('DataPegawai/{pegawai}',[DataPegawaiController::class,'destroy']);

Route::resource('DataPegawai', DataPegawaiController::class);


//Absensi//
Route::resource('Absensi',AbsensiController::class);
// Route::get('Absensi',[AbsensiController::class,'index']);
// Route::get('Absensi/create',[AbsensiController::class,'create']);
// Route::post('Absensi',[AbsensiController::class,'store']);
// Route::get('Absensi/{absensi}',[AbsensiController::class,'show']);
// Route::get('Absensi/{absensi/edit',[AbsensiController::class,'edit']);
// Route::delete('Absensi/{absensi}',[AbsensiController::class,'destroy']);


//Monitorng Overtime//
Route::resource('MonitoringOvertime',MonitoringOvertimeController::class);
// Route::get('MonitoringOvertime',[MonitoringOvertimeController::class,'index']);
// Route::get('MonitoringOvertime/create',[MonitoringOvertimeController::class,'create']);
// Route::post('MonitoringOvertime',[MonitoringOvertimeController::class,'store']);
// Route::get('MonitoringOvertime/{MonitoringOvertime}',[MonitoringOvertimeController::class,'show']);
// Route::get('MonitoringOvertime/{MonitoringOvertime/edit',[MonitoringOvertimeController::class,'edit']);
// Route::delete('MonitoringOvertime/{MonitoringOvertime}',[AbsensiController::class,'destroy']);

//Area Kerja//
Route::resource('AreaKerja',AreaKerjaController::class);