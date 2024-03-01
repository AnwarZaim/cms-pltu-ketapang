<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Data Absensi | Cleaning Servis</h4>
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
                                    <a href="{{ url('Absensi/create') }}"
                                        class="btn  waves-effect waves-light mb-3 float-end mt-1 "
                                        style="border: 1px solid #696CFF; color:#696CFF;"><i
                                            class="bx bx-plus float-right mt-1 mr-2"></i>
                                        Tambah Data Absensi
                                    </a>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="10px">no.</th>
                                                    <th width="100px">Aksi</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Kode PRK</th>
                                                    <th>NIK</th>
                                                    <th>Status</th>
                                                    <th>Bagian</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_absensi as $absensi)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <div class="btn-group ml-2">
                                                                <a href="{{ url('Absensi', $absensi->id) }}"
                                                                    class="btn btn-sm btn-dark">
                                                                    <i class="bx bx-info-circle"></i></a>
                                                                <a href="{{ url('Absensi', $absensi->id) }}/edit"
                                                                    class="btn btn-sm btn-warning btn-mat">
                                                                    <i class="bx bx-edit"></i></a>
                                                                <x-button.delete url="Absensi"
                                                                    id="{{ $absensi->id }}" />

                                                            </div>
                                                        </td>
                                                        <td>{{ $absensi->nama_pegawai }}</td>
                                                        <td>{{ $absensi->kode_prk }}</td>
                                                        <td>{{ $absensi->nik }}</td>
                                                        <td>{{ $absensi->status }}</td>
                                                        <td>{{ $absensi->bagian }}</td>

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
