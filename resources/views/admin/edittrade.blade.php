@extends('layout.master2')

@section('content')
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
                                <h5 class="modal-title" id="myLargeModalLabelTambah">Ubah Data</h5>
                            </div>
                            <form action="/admin/trades/{{$trade->id}}/updatetrade" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <p>Gambar</p>
                                        <input type="file" name="gambar" id="gambar" class="form-control" placeholder="gambar" value="{{$trade->gambar}}">
                                    </div>
                                    <div class="form-group">
                                        <p>Stok</p>
                                        <select name="stok" id="stok" class="form-control" placeholder="Stok">
                                            <option value="0" @if($trade->stok == 0 ) selected @endif >Habis</option>
                                            <option value="1" @if($trade->stok == 1 ) selected @endif >Ada</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input name="size" id="size" class="form-control" placeholder="Nama trade" value="{{$trade->size}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="nama" id="nama" class="form-control" placeholder="Dana dibutuhkan" value="{{$trade->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="harga" id="harga" class="form-control" placeholder="harga" value="{{$trade->harga}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="pemilik" id="pemilik" class="form-control" placeholder="Nama pemilik" value="{{$trade->pemilik}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="alamat" id="alamat" class="form-control" placeholder="Nama alamat" value="{{$trade->alamat}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="hp" id="hp" class="form-control" placeholder="Nama hp" value="{{$trade->hp}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary tombol">Ubah</button>
                                    <a href="/admin/trades">
                                        <button type="button" class="btn btn-secondary tombol" data-dismiss="modal">Kembali</button>
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