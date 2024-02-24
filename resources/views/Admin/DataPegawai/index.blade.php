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
                                    <h4 class="card-title">Data Pegawai</h4>
                                    <a href="{{url('DataPegawai/create')}}" class="btn  waves-effect waves-light mb-3 float-end mt-1 " style="border: 1px solid #696CFF; color:#696CFF;"><i class="bx bx-plus float-right mt-1 mr-2"></i>
                                        Tambah Data Pegawai
                                    </a>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th width="10px">no.</th>
                                                    <th width="100px">Aksi</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>NID</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status</th>
                                                    <th>Foto</th>
                                                    {{-- <th>Pendidikan</th>
                                                    <th>Sekolah/Universitas</th>
                                                    <th>Alamat KTP</th>
                                                    <th>Alamat Domisili</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Email</th>
                                                    <th>FTK/Non-FTK</th>
                                                    <th>Jabatan</th>
                                                    <th>Klasifikasi Bidang</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_pegawai as $pegawai)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group ml-2">
                                                            <a href="{{ url('DataPegawai', $pegawai->id) }}" class="btn btn-sm btn-dark">
                                                                <i class="bx bx-info-circle"></i></a>
                                                            <a href="{{ url('DataPegawai', $pegawai->id) }}/edit" class="btn btn-sm btn-warning btn-mat">
                                                                <i class="bx bx-edit"></i></a>
                                                            <x-button.delete id="{{ $pegawai->id }}" url="DataPegawai" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{$pegawai->nama_pegawai}}
                                                    </td>
                                                    <td>{{$pegawai->nid}}</td>
                                                    <td>{{$pegawai->tgl_lahir}}</td>
                                                    <td>{{$pegawai->tempat_lahir}}</td>
                                                    <td>{{$pegawai->jenis_kelamin}}</td>
                                                    <td>{{$pegawai->status}}</td>
                                                    <td><img src="{{asset($pegawai->foto)}}" alt="" style="height: 70px; width:50px; object-fit:cover"></td>
                                                    {{-- <td>{{$pegawai->pendidikan}}</td>
                                                    <td>{{$pegawai->sekolah_universitas}}</td>
                                                    <td>{{$pegawai->alamat_ktp}}</td>
                                                    <td>{{$pegawai->alamat_domisili}}</td>
                                                    <td>{{$pegawai->no_hp}}</td>
                                                    <td>{{$pegawai->email}}</td>
                                                    <td>{{$pegawai->ftk_nonftk}}</td>
                                                    <td>{{$pegawai->jabatan}}</td>
                                                    <td>{{$pegawai->klasifikasi_bidang}}</td> --}}
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