<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Create Data Absensi | Cleaning Servis</h4>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Data Absensi</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('Absensi') }}" class="btn btn-sm btn-default mb-2"
                                            style="border: 1px solid #696CFF; color:#696CFF"><i
                                                class="bx bx-chevron-left "></i>Kembali</a>

                                        <form action="{{ url('Absensi') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Nama Pegawai</label>
                                                    <input type="text" class="form-control" id="validationCustom02"
                                                        placeholder="nama_pegawai" value="" required
                                                        name="nama_pegawai">
                                                    <div class="valid-feedback">
                                                        Masukan Nama Pegawai
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">Kode PRK</label>
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="Kode PRk" required name="kode_prk">
                                                    <div class="invalid-feedback">
                                                        Masukan Kode PRk.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">NIK</label>
                                                    <input type="text" class="form-control" id="validationCustom04"
                                                        placeholder="NIK" required name="nik">
                                                    <div class="invalid-feedback">
                                                        Masukan NIK.
                                                    </div>
                                                </div>
                                            
                                          
                                                <div class="col-md-4 mb-3">
                                                    <label for="">Status</label>
                                                    <select name="status"
                                                        class="form-control">
                                                        <option value="">-Pilih status-</option>
                                                        <option value="Daytime">Daytime</option>
                                                        <option value="Shif">Shif</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Masukan Status.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Bagian</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="bagian" required name="bagian">
                                                    <div class="invalid-feedback">
                                                        Masukan Bagian.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-sm waves-effect waves-light ml-3 float-end" style="border: 1px solid red; color:red"
                                                    type="submit">BATAL</button>
                                                <button class="btn btn-sm waves-effect waves-light float-end" style="border: 1px solid #696CFF; color:#696CFF;margin-right:5px
                                                "
                                                    type="submit">SIMPAN</button>
                                        </form>

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
