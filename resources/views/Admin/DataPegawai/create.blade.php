<x-app>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title">
                                <h4 class="mb-0 font-size-18">Create Data Pegawai | Cleaning Servis</h4>
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
                                    <h4 class="card-title">Create Data Pegawai</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('DataPegawai') }}" class="btn btn-sm btn-default mb-2"
                                            style="border: 1px solid #696CFF; color:#696CFF"><i
                                                class="bx bx-chevron-left "></i>Kembali</a>
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <form  action="{{ url('DataPegawai') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom02">NID</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="NID"
                                                            value="" required name="nid">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Nama Pegawai</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <input type="text" class="form-control" id="validationCustom01"
                                                                placeholder="Nama Pegawai" aria-describedby="inputGroupPrepend" required name="nama_pegawai">
                                                            <div class="invalid-feedback">
                                                                Masukan Nama Pegawai.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom03">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="validationCustom03"
                                                            placeholder="Tanggal Lahir" required name="tgl_lahir">
                                                        <div class="invalid-feedback">
                                                            Masukan Tanggal Lahir.
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom05">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="validationCustom04"
                                                            placeholder="Tempat Lahir" required name="tempat_lahir">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom04">Jenis Kelamin</label>
                                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                            <option value="">-Pilih Jenis Kelamin-</option>
                                                            <option value="laki-laki">Lak-Laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom04">Status</label>
                                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Status"
                                                            required name="status">
                                                            
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom04">Masa Kerja Mulai</label>
                                                        <input type="date" class="form-control" id="validationCustom05"
                                                            placeholder="Masa Kerja Mulai" required name="masa_kerja_mulai">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom04">Masa Kerja Selesai</label>
                                                        <input type="date" class="form-control" id="validationCustom05"
                                                            placeholder="Masa Kerja Mulai" required name="masa_kerja_selesai">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom04">Masa Kontrak</label>
                                                        <input type="text" class="form-control" id="validationCustom05"
                                                            placeholder="Masa Kontrak" required name="masa_kontrak">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom04">Foto</label>
                                                        <input type="file" class="form-control" id="validationCustom05"
                                                            placeholder="" required name="foto">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm waves-effect waves-light ml-3 float-end" style="border: 1px solid red; color:red"
                                                    type="submit">BATAL</button>
                                                <button class="btn btn-sm waves-effect waves-light float-end" style="border: 1px solid #696CFF; color:#696CFF;margin-right:5px
                                                "
                                                    type="submit">SIMPAN</button>
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
