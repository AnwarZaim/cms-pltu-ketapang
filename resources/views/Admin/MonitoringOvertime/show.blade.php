<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Show Data MonitoringOvertime | Cleaning Servis</h4>
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
                                    <h4 class="card-title">Show Data MonitoringOvertime</h4>
                                    <a href="{{ url('MonitoringOvertime') }}" class="btn btn-sm btn-default mb-2"
                                        style="border: 1px solid #696CFF; color:#696CFF"><i
                                            class="bx bx-chevron-left "></i>Kembali</a>
                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <dl class="row">
                                                <dt class="col-md-4">Nama Pegawai</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->nama_pegawai }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Tanggal Lahir</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->tgl_lahir}}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Tempat Lahir</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->tempat_lahir }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jenis Kelamis</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->jenis_kelamin }}</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-md-4">Jam Lembur</dt>
                                                <dd class="col-md-8">: {{ $monitoringovertime->jam_lembur }}</dd>
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
