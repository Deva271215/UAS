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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="col-sm-6 m-auto" role="document">
                        <div class="shadow">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabelTambah">Ubah Data</h5>
                            </div>
                            <form action="/admin/{{$proyek->id}}/update" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="cr">Kode</label>
                                        <input type="text" class="form-control" id="cr" name="cr" placeholder="kode"
                                            value="{{$proyek->cr}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input name="gambar" type="file" id="gambar" class="form-control"
                                            placeholder="gambar" value="{{$proyek->gambar}}">

                                        {{-- ERROR --}}
                                        {{-- <div class="invalid-feedback d-block">
                                            {{ $errors->first('gambar')}}
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <label for="nama_proyek">Nama Proyek</label>
                                    <input name="nama_proyek" id="nama_proyek" class="form-control"
                                        placeholder="Nama proyek" value="{{$proyek->nama_proyek}}">
                                </div>
                                <div class="form-group">
                                    <label for="dana_dibutuhkan">Dana Dibutuhkan</label>
                                    <input name="dana_dibutuhkan" id="dana_dibutuhkan" class="form-control"
                                        placeholder="Dana dibutuhkan" value="{{$proyek->dana_dibutuhkan}}">
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input name="harga" id="harga" class="form-control" placeholder="Dana dibutuhkan"
                                        value="{{$proyek->harga}}">
                                </div>
                                <div class="form-group">
                                    <label for="roi">ROI</label>
                                    <input name="roi" id="roi" class="form-control" placeholder="roi"
                                        value="{{$proyek->roi}}">
                                </div>
                                <div class="form-group">
                                    <label for="bibit_stok">Stok</label>
                                    <input name="bibit_stok" id="bibit_stok" class="form-control"
                                        placeholder="bibit_stok" value="{{$proyek->bibit_stok}}">
                                </div>
                                <div class="form-group">
                                    <label for="bibit_sold">Terjual</label>
                                    <input name="bibit_sold" id="bibit_sold" class="form-control"
                                        placeholder="bibit_sold" value="{{$proyek->bibit_sold}}">
                                </div>
                                <div class="form-group">
                                    <label for="bibit_tersisa">Tersisa</label>
                                    <input name="bibit_tersisa" id="bibit_tersisa" class="form-control"
                                        placeholder="bibit_tersisa" value="{{$proyek->bibit_tersisa}}">
                                </div>
                                <div class="form-group">
                                    <label for="penerima">Nama Peternak</label>
                                    <input name="penerima" id="penerima" class="form-control"
                                        placeholder="Nama penerima" value="{{$proyek->penerima}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Peternak</label>
                                    <input name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat"
                                        value="{{$proyek->alamat}}">
                                </div>
                                <div class="form-group">
                                    <label for="durasi">Durasi Proyek</label>
                                    <input name="durasi" type="number" id="durasi" class="form-control"
                                        placeholder="Durasi proyek" value="{{$proyek->durasi}}">
                                </div>
                                <div class="form-group">
                                    <label for="dana_terkumpul">Dana Terkumpul</label>
                                    <input name="dana_terkumpul" id="dana_terkumpul" class="form-control"
                                        placeholder="Dana terkumpul" value="{{$proyek->dana_terkumpul}}">
                                </div>
                                <!-- <div class="form-group">
                                        <label for="dana_kurang">Dana Kurang</label>
                                        <input name="dana_kurang" id="dana_kurang" class="form-control" placeholder="Kekurangan dana" value="{{$proyek->dana_kurang}}">
                                    </div> -->
                                <div class="form-group">
                                    <label for="persen">Persentase</label>
                                    <input name="persen" id="persen" class="form-control" placeholder="Persentase"
                                        value="{{$proyek->persen}}">
                                </div>
                                <div class="form-group">
                                    <label for="link_rab">RAB</label>
                                    <input name="link_rab" id="link_rab" class="form-control" placeholder="link rab"
                                        value="{{$proyek->link_rab}}">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary tombol">Ubah</button>
                            <a href="/admin">
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