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
                                                <dt class="col-md-4">Masa Kerja Mulai</dt>
                                                <dd class="col-md-8">: {{ $pegawai->masa_kerja_mulai }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Masa Kerja Selesai</dt>
                                                <dd class="col-md-8">: {{ $pegawai->masa_kerja_selesai }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Masa Kontrak</dt>
                                                <dd class="col-md-8">: {{ $pegawai->masa_kontrak }}</dd>
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
