<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Edit Data Absensi | Cleaning Servis</h4>
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
                                    <h4 class="card-title">Edit Data Absensi</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('Absensi') }}" class="btn btn-sm btn-default mb-2"
                                            style="border: 1px solid #696CFF; color:#696CFF"><i
                                                class="bx bx-chevron-left "></i>Kembali</a>
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <form action="{{ url('Absensi', $absensi->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Nama Pegawai" name="nama_pegawai"
                                                                value="{{ $absensi->nama_pegawai }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Kode PRK" name="kode_prk"
                                                                value="{{ $absensi->kode_prk }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="NIK" name="nik"
                                                                value="{{ $absensi->nik }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Status" name="status"
                                                                value="{{ $absensi->status }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Bagian" name="bagian"
                                                                value="{{ $absensi->bagian }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="button-group float-end">
                                                    <button class="btn btn-sm waves-effect waves-light ml-3 float-end"
                                                        style="border: 1px solid red; color:red"
                                                        type="submit">BATAL</button>
                                                    <button class="btn btn-sm waves-effect waves-light float-end"
                                                        style="border: 1px solid #696CFF; color:#696CFF;margin-right:5px"
                                                        type="submit">SIMPAN</button>
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
