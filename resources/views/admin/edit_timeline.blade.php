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
                            <form action="/admin/{{$timeline->id}}/update-timeline" method="post"
                                enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <input name="image" type="file" id="image" class="form-control"
                                            placeholder="image" value="{{$timeline->image}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <input name="description" id="description" class="form-control"
                                            placeholder="Deskripsi.." value="{{$timeline->description}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="dr">Kematian</label>
                                        <input name="dr" id="dr" class="form-control" placeholder="Jumlah.."
                                            value="{{$timeline->dr}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary tombol">Update</button>
                                    <a href="/admin/timeline">
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