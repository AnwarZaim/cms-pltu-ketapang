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
                                    <h4 class="card-title">Edit Data Pegawai</h4>
                                    <div class="table-responsive">
                                        <a href="{{ url('Absensi') }}" class="btn btn-sm btn-default mb-2"
                                            style="border: 1px solid #696CFF; color:#696CFF"><i
                                                class="bx bx-chevron-left "></i>Kembali</a>
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <form action="{{ url('Absensi', $absensi->id) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Nama Pegawai" name="nama_pegawai"
                                                                value="{{ $absensi->nama_pegawai }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="id_pegawai"
                                                                name="nid" value="{{ $absensi->id_pegawai }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Tanggal Lahir" name="tgl_lahir"
                                                                value="{{ $absensi->tgl_kahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Tempat Lahir" name="tempat_lahir"
                                                                value="{{ $absensi->tempat_lahir }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Jens Kelamin" name="jenis_kelamin"
                                                                value="{{ $absensi->jenis_kelamin }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Status" name="no_hp"
                                                                value="{{ $absensi->no_hp }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Masa Kerja Mulai" name="from_aplod"
                                                                value="{{ $absensi->from_aplod }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Masa Kerja Selesai" name="kriteria"
                                                                value="{{ $absensi->kriteria }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="absensi_id" class="form-select"
                                                            aria-label="Default select example">
                                                            @foreach ($list_absensi as $absensi)
                                                                <option value="{{ $absensi->id }}"
                                                                    {{ $absensi->nama_pegawai == $absensi->id ? 'selected' : '' }}>
                                                                    {{ $absensi->nama_pegawai }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="button-group float-end">
                                                    <a href="{{ url('Absensi') }}" class="btn btn-danger btn-sm"
                                                        style="margin-right:10px"><i
                                                            class="fa fa-trash "></i>Batal</a>
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
