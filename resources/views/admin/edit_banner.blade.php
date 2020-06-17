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
                            <form action="/admin/{{$banner->id}}/update-banner" method="post"
                                enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input name="gambar" type="file" id="gambar" class="form-control"
                                            placeholder="gambar" value="{{$banner->gambar}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" id="nama" class="form-control" placeholder="Nama.."
                                            value="{{$banner->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="caption">Caption</label>
                                        <textarea name="caption" id="caption" class="form-control"
                                            placeholder="caption.." value="{{$banner->caption}}"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tombol">Link Tombol</label>
                                        <input name="tombol" id="tombol" class="form-control" placeholder="tombol.."
                                            value="{{$banner->tombol}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary tombol">Update</button>
                                    <a href="/admin/banner">
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