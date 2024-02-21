<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Monitoring Overtime | Cleaning Servis</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Start Page-content-Wrapper -->
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Monitoring Overtime</h4>
                                    <a href="{{url('MonitoringOvertime/create')}}" class="btn btn-primary waves-effect waves-light mb-3 float-right mt-1 ">
                                        Tambah Data Monitoring Overtime
                                        <i class="bx bx-plus float-right mt-1 mr-2"></i>
                                    </a>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="10px">no.</th>
                                                    <th width="100px">Aksi</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Jam Lembur</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($list_monitoringovertime as $monitoringovertime)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="btn-group ml-2">
                                                                        <a href="{{ url('MoinitoringOvertime', $monitoringovertime->id) }}"
                                                                            class="btn btn-sm btn-dark">
                                                                            <i class="bx bx-info-circle"></i></a>
                                                                        <a href="{{ url('DataPegawai', $monitoringovertime->id) }}/edit"
                                                                            class="btn btn-sm btn-warning btn-mat">
                                                                            <i class="bx bx-edit"></i></a>
                                                                        <x-button.delete id="{{ $monitoringovertime->id }}"
                                                                            path="{{ $monitoringovertime->path }}" />
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                            {{$monitoringovertime->nama_pegawai}}
                                                            </td>
                                                            <td>{{$monitoringovertime->tgl_lahir}}</td>
                                                            <td>{{$monitoringovertime->tempat_lahir}}</td>
                                                            <td>{{$monitoringovertime->jenis_kelamin}}</td>
                                                            <td>{{$monitoringovertime->jam_lembur}}</td>
                                                        </tr>
                                                    @endforeach
                                            </tbody>
                                        </table>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <!-- end row -->
                </div>
                <!-- End Page-content -->
            </div>
            <!-- Container-Fluid -->
        </div>
        <!-- End Page-content-wrapper -->
    </div>
</x-app>