@extends('layout.global')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row ">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Pegawai</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/storepegawai" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="inputName">Nama Pegawai</label>
                            <input type="text" name="nama" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Jenis Kelamin</label>
                            <select id="inputStatus" name="jekel" class="form-control custom-select">
                                <option selected disabled>Pilih</option>
                                <option>pria</option>
                                <option>wanita</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nomor Telfon:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="number" name="nohp" class="form-control"
                                    data-inputmask='"mask": "089999999999"' data-mask>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputProjectLeader">Upload foto</label>
                            <input type="file" name="foto" id="inputProjectLeader" class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success float-right swalDefaultSuccess">
                                    Simpan
                                </button>
                                <a href="/pegawai" class="btn btn-secondary float-right">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        {{-- <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Budget</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEstimatedBudget">Estimated budget</label>
                        <input type="number" id="inputEstimatedBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSpentBudget">Total amount spent</label>
                        <input type="number" id="inputSpentBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEstimatedDuration">Estimated project duration</label>
                        <input type="number" id="inputEstimatedDuration" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div> --}}
    </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection