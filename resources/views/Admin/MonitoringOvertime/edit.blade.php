<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Edit Data Pegawai | Cleaning Servis</h4>
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
                                    <h4 class="card-title">Edit Data Pegawai</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('MonitoringOvertime') }}" class="btn btn-sm btn-default mb-2"
                                            style="border: 1px solid #696CFF; color:#696CFF"><i
                                                class="bx bx-chevron-left "></i>Kembali</a>
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <form action="{{ url('MonitoringOvertime', $monitoringovertime->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Nama Pegawai" name="nama_pegawai"
                                                                value="{{ $monitoringovertime->nama_pegawai }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Tanggal Lahir" name="tgl_lahir"
                                                                value="{{ $monitoringovertime->tgl_kahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Tempat Lahir" name="tempat_lahir"
                                                                value="{{ $monitoringovertime->tempat_lahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Jens Kelamin" name="jenis_kelamin"
                                                                value="{{ $monitoringovertime->jenis_kelamin }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Status" name="jam_lembur"
                                                                value="{{ $monitoringovertime->jam_lembur }}">
                                                        </div>
                                                    </div>
                                                    >


                                                    <div class="col-md-6">
                                                        <select name="pegawai_id" class="form-select"
                                                            aria-label="Default select example">
                                                            @foreach ($list_pegawai as $monitoringovertime)
                                                                <option value="{{ $monitoringovertime->id }}"
                                                                    {{ $monitoringovertime->nama_pegawai == $monitoringovertime->id ? 'selected' : '' }}>
                                                                    {{ $monitoringovertime->nama_pegawai }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="button-group float-end">
                                                    <a href="{{ url('DataPegawai') }}" class="btn btn-danger btn-sm"
                                                        style="margin-right:10px"><i class="fa fa-trash "></i>Batal</a>
                                                    <button class="btn btn-dark btn-sm"><i class="fa fa-save "></i>
                                                        Simpan</button>
                                                </div>
                                            </form>
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
