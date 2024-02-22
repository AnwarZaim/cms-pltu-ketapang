<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Data Pegawai | Cleaning Servis</h4>
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
                                    <h4 class="card-title">Data Absensi</h4>
                                    <a href="{{ url('Absensi/create') }}" class="btn btn-primary waves-effect waves-light mb-3 float-right mt-1 ">
                                        Tambah Data Absensi
                                        <i class="bx bx-plus float-right mt-1 mr-2"></i>
                                    </a>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="10px">no.</th>
                                                    <th width="100px">Aksi</th>
                                                    <th>Nama Pegawai</th>
                                                    {{-- <th>ID Pegawai</th> --}}
                                                    <th>Tanggal Lahir</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Kriteria</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_absensi as $absensi)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group ml-2">
                                                            <a href="{{ url('Absensi', $absensi->id) }}" class="btn btn-sm btn-dark">
                                                                <i class="bx bx-info-circle"></i></a>
                                                            <a href="{{ url('Absensi', $absensi->id) }}/edit" class="btn btn-sm btn-warning btn-mat">
                                                                <i class="bx bx-edit"></i></a>
                                                            <x-button.delete url="Absensi" id="{{ $absensi->id }}" />

                                                        </div>
                                                    </td>
                                                    <td>{{ $absensi->nama_pegawai }}</td>
                                                    {{-- <td>{{ $absensi->id_pegawai }}</td> --}}
                                                    <td>{{ $absensi->tgl_lahir }}</td>
                                                    <td>{{ $absensi->tempat_lahir }}</td>
                                                    <td>{{ $absensi->jenis_kelamin }}</td>
                                                    <td>{{ $absensi->kriteria }}</td>

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