@extends('layout.global')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title" style="font-weight: bold;">Tabel Data Pegawai</h2>
                        <a href="/createpegawai" class="btn btn-success float-right">Tambah</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No HP</th>
                                    <th>Foto</th>
                                    <th class="text-right">_Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ( $data as $row)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->jekel }}</td>
                                    <td>0{{ $row->nohp }}</td>
                                    <td><img src={{ asset ('storage/foto/'.($row->foto)) }} style="height:50px;
                                        width:70px;"></td>
                                    <td>
                                        <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                            <a href="/tampilpegawai/{{ $row->id }}" type="radio" name="options"
                                                id="option_a1" class="btn btn-info fas fa-edit"></a>
                                            <a href="/deletepegawai/{{ $row->id }}" type="radio" name="_method"
                                                id="option_a2" class="btn btn-danger fas fa-trash-alt"></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total Data Pegawai</th>
                                    <th style="text-align: right">{{ $total }}</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection