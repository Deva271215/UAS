@extends('layout.master2')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 mt-2">Admin</h1>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-lg">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <a href="" class="btn btn-success btn-icon-split" role="button" data-toggle="modal" data-target="#myLargeModalLabelTambah">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="col-sm-12 col-md-6">
                                    <div class="row">
                                        <form id="dataTable_filter" class="dataTables_filter border-bottom-light" method="get" action="/admin">
                                            <label>Search:
                                                <input name="cari" type="search" class="form-control form-control-sm border-0" placeholder="" aria-controls="dataTable">
                                            </label>
                                            <button class="btn btn-circle" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                        <a href="/logout" class="btn float-right"><i class="fa fa-backward"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Gambar</th>
                                                    <th>Stok</th>
                                                    <th>Size</th>
                                                    <th>Nama</th>
                                                    <th>Harga</th>
                                                    <th>Pemilik</th>
                                                    <th>Alamat</th>
                                                    <th>Hp</th>
                                                    <th>Aksi</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_trades as $trade)
                                                <tr class="text-center">
                                                    <td>{{$trade->gambar}}</td>
                                                    <td>{{$trade->stok}}</td>
                                                    <td>{{$trade->size}}</td>
                                                    <td>{{$trade->nama}}</td>
                                                    <td>{{$trade->harga}}</td>
                                                    <td>{{$trade->pemilik}}</td>
                                                    <td>{{$trade->alamat}}</td>
                                                    <td>{{$trade->hp}}</td>
                                                    <td>
                                                        <a href="trades/{{$trade->id}}/edittrade" class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                            <span class="text">Ubah</span>
                                                        </a>
                                                        <a href="trades/{{$trade->id}}/deletetrade" class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                            <span class="text">Hapus</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</div>
<!-- End of Main Content -->

<!-- MODAL Tambah -->
<div class="modal fade" id="myLargeModalLabelTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabelTambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabelTambah">Tambah Data Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/createtrade" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <p>Gambar</p>
                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="gambar" value="{{$trade->gambar}}">
                    </div>
                    <div class="form-group">
                        <p>Stok</p>
                        <select name="stok" id="stok" class="form-control" placeholder="Stok" value="{{$trade->stok}}">
                            <option value="0">Habis</option>
                            <option value="1">Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <p>Size</p>
                        <input name="size" id="size" class="form-control" placeholder="Masukan size">
                    </div>
                    <div class="form-group">
                        <p>Nama</p>
                        <input name="nama" id="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <p>Harga</p>
                        <input name="harga" id="harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <p>Pemilik</p>
                        <input name="pemilik" id="pemilik" class="form-control" placeholder="Pemilik">
                    </div>
                    <div class="form-group">
                        <p>Alamat</p>
                        <input name="alamat" id="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <p>Hp</p>
                        <input name="hp" id="hp" class="form-control" placeholder="hp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tombol">Tambahkan</button>
                    <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection