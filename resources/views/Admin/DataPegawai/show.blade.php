<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Show Data Pegawai | Cleaning Servis</h4>
                                <ol class="breadcrumb">
                                </ol>
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
                                    <h4 class="card-title">Show Data Pegawai</h4>
                                    <a href="{{ url('DataPegawai') }}" class="btn btn-sm btn-default mb-2"
                                        style="border: 1px solid #696CFF; color:#696CFF"><i
                                            class="bx bx-chevron-left "></i>Kembali</a>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <dl class="row">
                                                <dt class="col-md-4">Nama Pegawai</dt>
                                                <dd class="col-md-8">: {{ $pegawai->nama_pegawai }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">NID</dt>
                                                <dd class="col-md-8">: {{ $pegawai->nid }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Tangal Lahir</dt>
                                                <dd class="col-md-8">: {{ $pegawai->tgl_lahir }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Tempat Lahir</dt>
                                                <dd class="col-md-8">: {{ $pegawai->tempat_lahir }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jenis Kelamin</dt>
                                                <dd class="col-md-8">: {{ $pegawai->jenis_kelamin }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Status</dt>
                                                <dd class="col-md-8">: {{ $pegawai->status }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Pendidikan</dt>
                                                <dd class="col-md-8">: {{ $pegawai->pendidikan}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Sekolah/Universitas</dt>
                                                <dd class="col-md-8">: {{ $pegawai->sekolah_universitas }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Alamat KTP</dt>
                                                <dd class="col-md-8">: {{ $pegawai->alamat_ktp }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Alamat Domisili</dt>
                                                <dd class="col-md-8">: {{ $pegawai->alamat_domisil }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Nomor HP</dt>
                                                <dd class="col-md-8">: {{ $pegawai->no_hp }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Email</dt>
                                                <dd class="col-md-8">: {{ $pegawai->email}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">FTK/NON-FTK</dt>
                                                <dd class="col-md-8">: {{ $pegawai->ftk_nonftk}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jabatan</dt>
                                                <dd class="col-md-8">: {{ $pegawai->jabatan}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Klasifikasi Bidang</dt>
                                                <dd class="col-md-8">: {{ $pegawai->klasifikasi_bidang }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">foto</dt>
                                                <dd class="col-md-8">: {{ $pegawai->foto }}</dd>
                                            </dl>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Page Content Wrapper-->
            </div>
            <!-- Container-Fluid -->
        </div>
        <!-- End Page-content -->
    </div>
</x-app>
