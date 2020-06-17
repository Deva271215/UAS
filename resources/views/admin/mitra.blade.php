@extends('layout.master2')

@section('content')
<section class="spc-hidden-bar-medium"></section>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 mt-2 mx-auto">Mitra</h1>

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
                                    <a class="dropdown-item" href="/admin/">Proyek</a>
                                    <a class="dropdown-item" href="/admin/banner/">Banner</a>
                                    <a class="dropdown-item" href="/admin/timeline/">Report</a>
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
                                                    <th>Foto</th>
                                                    <th>Nama</th>
                                                    <th>Pengalaman</th>
                                                    <th>Jenis</th>
                                                    <th>Umur</th>
                                                    <th>Alamat</th>
                                                    <th>Tgl Bergabung</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_mitra as $mitra)
                                                <tr>
                                                    <td>
                                                        <a href="/admin/{{$mitra->id}}/edit-mitra"
                                                            class="btn btn-primary btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a href="/admin/{{$mitra->id}}/delete-mitra"
                                                            class="btn btn-danger btn-icon-split">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                    <td>{{$mitra->kode}}</td>
                                                    <td>
                                                        <img class="spc-img-profil img-fluid"
                                                            src="\img\mitra\{{$mitra->image}}" alt="{{$mitra->image}}">
                                                    </td>
                                                    <td>{{$mitra->nama}}</td>
                                                    <td>{{$mitra->pengalaman}}</td>
                                                    <td>{{$mitra->jenis}}</td>
                                                    <td>{{$mitra->umur}}</td>
                                                    <td>{{$mitra->alamat}}</td>
                                                    <td>{{$mitra->created_at}}</td>
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
            <form action="/admin/create-mitra" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode"
                            placeholder="P = petani / D = Pedagang">
                    </div>
                    <div class="form-group hidden">
                        <input type="hidden" class="form-control" id="image" name="image" value="profil.jpg">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" id="nama" class="form-control" placeholder="Nama...">
                    </div>
                    <div class="form-group">
                        <label for="pengalaman">Pengalaman</label>
                        <input name="pengalaman" id="pengalaman" class="form-control" placeholder="Lama pengalaman">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input name="jenis" id="jenis" class="form-control" placeholder="Petani/Pedagang">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input name="umur" id="umur" class="form-control" placeholder="Umur">
                    </div>
                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input name="alamat" id="alamat" class="form-control" placeholder="alamat..">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tombol">Tambah</button>
                    <a href="/admin/mitra">
                        <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Kembali</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection