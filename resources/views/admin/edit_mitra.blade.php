@extends('layout.master2')

@section('content')
<section class="spc-hidden-bar-medium"></section>
<!-- Begin Page Content -->
<div class="container-fluid">

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
                <div class="card-body">
                    <div class="col-sm-6 m-auto" role="document">
                        <div class="shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabelTambah">Update Data</h5>
                            </div>
                            <form action="/admin/{{$mitra->id}}/update-mitra" method="post"
                                enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="image">Foto</label>
                                        <input name="image" type="file" id="image" class="form-control"
                                            placeholder="image" value="{{$mitra->image}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kode">kode</label>
                                        <input name="kode" id="kode" class="form-control"
                                            placeholder="P (petani)/ D (pedagang)" value="{{$mitra->kode}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" id="nama" class="form-control" placeholder="Nama lengkap.."
                                            value="{{$mitra->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis</label>
                                        <input name="jenis" id="jenis" class="form-control" placeholder="Jenis.."
                                            value="{{$mitra->jenis}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">umur</label>
                                        <input name="umur" id="umur" class="form-control" placeholder="umur.."
                                            value="{{$mitra->umur}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pengalaman">pengalaman</label>
                                        <input name="pengalaman" id="pengalaman" class="form-control"
                                            placeholder="pengalaman.." value="{{$mitra->pengalaman}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">alamat</label>
                                        <input name="alamat" id="alamat" class="form-control" placeholder="alamat.."
                                            value="{{$mitra->alamat}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary tombol">Update</button>
                                    <a href="/admin/mitra">
                                        <button type="button" class="btn btn-secondary tombol"
                                            data-dismiss="modal">Kembali</button>
                                    </a>
                                </div>
                            </form>
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
@endsection