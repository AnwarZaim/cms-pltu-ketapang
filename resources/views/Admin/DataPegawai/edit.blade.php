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
                                        <a href="{{ url('DataPegawai') }}" class="btn btn-sm btn-default mb-2" style="border: 1px solid #696CFF; color:#696CFF"><i class="bx bx-chevron-left "></i>Kembali</a>
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <form action="{{ url('DataPegawai', $pegawai->id) }}" method="post">
                                            
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="NID" name="nid" value="{{ $pegawai->nid }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="{{ $pegawai->tgl_kahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ $pegawai->tempat_lahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Jens Kelamin" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Status" name="status" value="{{ $pegawai->status }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Pendidikan" name="pendidikan" value="{{ $pegawai->pendidikan }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Sekolah/Universitas" name="sekolah_universitas" value="{{ $pegawai->sekolah_universitas }}">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Alamat KTP" name="alamat_ktp" value="{{ $pegawai->alamat_ktp }}">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Alamat Domisil" name="alamat_domisil" value="{{ $pegawai->alamat_domisil }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Nomor HP" name="no_hp" value="{{ $pegawai->no_hp }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Email" name="email" value="{{ $pegawai->email }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="FTK/NON-FTK" name="ftk_nonftk" value="{{ $pegawai->ftk_nonftk }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="{{ $pegawai->jabatan }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Klasifikasi Bidang" name="klasifikasi_bidang" value="{{ $pegawai->klasifikasi_bidang }}">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Foto" name="foto" value="{{ $pegawai->foto }}">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="button-group float-end">
                                                    <button class="btn btn-sm waves-effect waves-light ml-3 float-end" style="border: 1px solid red; color:red" type="submit">BATAL</button>
                                                    <button class="btn btn-sm waves-effect waves-light float-end" style="border: 1px solid #696CFF; color:#696CFF;margin-right:5px" type="submit">SIMPAN</button>
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