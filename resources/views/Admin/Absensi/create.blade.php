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
                                                {{-- <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">ID Pegawai</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" id="validationCustom01"
                                                                placeholder="ID Pegawai" aria-describedby="inputGroupPrepend" required name="id_pegawai">
                                                            <div class="invalid-feedback">
                                                                Masukan Id Pegawai.
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="validationCustom03"
                                                        placeholder="Tanggal Lahir" required name="tgl_lahir">
                                                    <div class="invalid-feedback">
                                                        Masukan Tanggal Lahir.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="validationCustom04"
                                                        placeholder="Tempat Lahir" required name="tempat_lahir">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" id="jenis_kelamin"
                                                        class="form-control">
                                                        <option value="">-Pilih Jenis Kelamin-</option>
                                                        <option value="laki-laki">Lak-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Masukan Jenis Kelamin.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">NO-Hp</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="no_hp" required name="no_hp">
                                                    <div class="invalid-feedback">
                                                        Masukan Nomor Handphone.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">From Aplod</label>
                                                    <input type="file" class="form-control" id="validationCustom05"
                                                        placeholder="From Aplod" required name="from_aplod" accept="application/pdf">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">Kriteria</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="Kriteria" required name="kriteria">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary waves-effect waves-light float-right"
                                                type="submit">SIMPAN</button>
                                            <button class="btn btn-primary waves-effect waves-light float-right mr-3"
                                                type="submit">BATAL</button>
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
