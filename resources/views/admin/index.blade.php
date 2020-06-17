@extends('layout.master2')

@section('content')
<section class="spc-hidden-bar-medium"></section>
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
                    <div class="form-row">
                        <div class="card-header py-3">
                            <a href="" class="btn btn-success btn-icon-split" role="button" data-toggle="modal"
                                data-target="#myLargeModalLabelTambah">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-header">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/admin/banner/">Banner</a>
                                    <a class="dropdown-item" href="/admin/timeline/">Report</a>
                                    <a class="dropdown-item" href="/admin/mitra/">Mitra</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="col-sm-12 col-md-6">
                                    <div class="row">
                                        <form id="dataTable_filter" class="dataTables_filter border-bottom-light"
                                            method="get" action="/admin">
                                            <label>Search:
                                                <input name="cari" type="search"
                                                    class="form-control form-control-sm border-0" placeholder=""
                                                    aria-controls="dataTable">
                                            </label>
                                            <button class="btn btn-circle" type="submit"><i
                                                    class="fa fa-search"></i></button>
                                        </form>
                                        <a href="/logout" class="btn float-right"><i class="fa fa-backward"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Aksi</th>
                                                    <th>Kode</th>
                                                    <th>Gambar</th>
                                                    <th>Nama Proyek</th>
                                                    <th>Kebutuhan Dana</th>
                                                    <th>Harga</th>
                                                    <th>ROI</th>
                                                    <th>Stok</th>
                                                    <th>Terjual</th>
                                                    <th>Tersisa</th>
                                                    <th>Petani</th>
                                                    <th>Alamat</th>
                                                    <th>Durasi</th>
                                                    <!-- <th>Kekurangan Dana</th> -->
                                                    <th>Dana Terkumpul</th>
                                                    <th>Persentase</th>
                                                    <th>RAB</th>

                                            </thead>
                                            <tbody>
                                                @foreach ($data_proyek as $proyek)
                                                <tr>
                                                    <td>
                                                        <a href="/admin/{{$proyek->id}}/edit"
                                                            class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a href="/admin/{{$proyek->id}}/delete"
                                                            class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>{{$proyek->cr}}</td>
                                                    <td>{{$proyek->gambar}}</td>
                                                    <td>{{$proyek->nama_proyek}}</td>
                                                    <td>Rp {{$proyek->dana_dibutuhkan}}</td>
                                                    <td>Rp {{$proyek->harga}}</td>
                                                    <td>{{$proyek->roi}}%</td>
                                                    <td>{{$proyek->bibit_stok}}</td>
                                                    <td>{{$proyek->bibit_sold}}</td>
                                                    <td>{{$proyek->bibit_tersisa}}</td>
                                                    <td>{{$proyek->penerima}}</td>
                                                    <td>{{$proyek->alamat}}</td>
                                                    <td>{{$proyek->durasi}} hari</td>
                                                    <!-- <td>Rp {{$proyek->dana_kurang}}</td> -->
                                                    <td>Rp {{$proyek->dana_terkumpul}}</td>
                                                    <td>{{$proyek->persen}}%</td>
                                                    <td>{{$proyek->link_rab}}</td>
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
<div class="modal fade" id="myLargeModalLabelTambah" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabelTambah" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabelTambah">Tambah Data Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/create" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cr">Kode</label>
                        <input type="text" class="form-control" id="cr" name="cr" placeholder="kode">
                        <div class="invalid-feedback d-block">
                            {{ $errors->first('cr')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input name="gambar" type="text" id="gambar" class="form-control" value="proyek-default.jpg"
                            placeholder="gambar">
                    </div>
                    <div class="form-group">
                        <label for="nama_proyek">Nama Proyek</label>
                        <input name="nama_proyek" id="nama_proyek" class="form-control" placeholder="Nama proyek">
                    </div>
                    <div class="form-group">
                        <label for="dana_dibutuhkan">Dana Dibutuhkan</label>
                        <input name="dana_dibutuhkan" id="dana_dibutuhkan" class="form-control"
                            placeholder="Dana dibutuhkan">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input name="harga" id="harga" class="form-control" placeholder="Dana dibutuhkan">
                    </div>
                    <div class="form-group">
                        <label for="roi">ROI</label>
                        <input name="roi" id="roi" class="form-control" placeholder="roi">
                    </div>
                    <div class="form-group">
                        <label for="bibit_stok">Stok</label>
                        <input name="bibit_stok" id="bibit_stok" class="form-control" placeholder="Stok bibit..">
                    </div>
                    <div class="form-group">
                        <label for="bibit_sold">Terjual</label>
                        <input name="bibit_sold" id="bibit_sold" class="form-control" placeholder="Terjual..">
                    </div>
                    <div class="form-group">
                        <label for="bibit_tersisa">Bibit Tersisa</label>
                        <input name="bibit_tersisa" id="bibit_tersisa" class="form-control" placeholder="tersisa..">
                    </div>
                    <div class="form-group">
                        <label for="penerima">Nama Peternak</label>
                        <input name="penerima" id="penerima" class="form-control" placeholder="Nama penerima..">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Peternak</label>
                        <input name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat">
                    </div>
                    <div class="form-group">
                        <label for="durasi">Durasi Proyek</label>
                        <input name="durasi" type="number" id="durasi" class="form-control" placeholder="Durasi proyek">
                    </div>
                    <div class="form-group">
                        <label for="dana_terkumpul">Dana Terkumpul</label>
                        <input name="dana_terkumpul" id="dana_terkumpul" class="form-control"
                            placeholder="Dana terkumpul">
                    </div>
                    <!-- <div class="form-group">
                        <label for="dana_kurang">Dana Kurang</label>
                        <input name="dana_kurang" id="dana_kurang" class="form-control" placeholder="Kekurangan dana">
                    </div> -->
                    <div class="form-group">
                        <label for="persen">Persentase</label>
                        <input name="persen" id="persen" class="form-control" placeholder="Persen">
                    </div>
                    <div class="form-group">
                        <label for="link_rab">RAB</label>
                        <input name="link_rab" id="link_rab" class="form-control" placeholder="link rab">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tombol">Tambah</button>
                    <a href="/admin">
                        <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Kembali</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection