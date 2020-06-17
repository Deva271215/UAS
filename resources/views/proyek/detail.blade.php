@extends('layout.master2')

@section('content')

<!-- Card -->
<section class="container">
    <div class="shadow border-rad-21 pb-4">
        <div class="shadow mt-5 border-rad-21">
            <img class="border-rad-21 spc-card-img-big img-fluid card-img-top" src="/img/{{$proyek->gambar}}"
                alt="gambar ilustrasi">
        </div>
        <div class="card-body">
            <div class="">
                <h3 class="small font-weight-bold">{{$proyek->nama_proyek}}</h3>
                <h3 class="medium font-weight-bold green-text">Rp {{$proyek->harga}}</h3>
                <br>
                <h4 class="small font-weight-lighter">Eks. Keuntungan<span class="float-right">Durasi Budidaya</span>
                </h4>
                <h4 class="small font-weight-bold md-title green-text">{{$proyek->roi}}%<span
                        class="float-right">{{$proyek->durasi}}
                        Hari</span></h4>
            </div>
            <!-- Full Meter -->
            <h4 class="small font-weight-lighter">Persentase<span class="float-right">{{$proyek->presentase}}%</span>
            </h4>
            <div class="progress mb-4 progress-sm">
                <div class="progress-bar bg-info" role="progressbar" style="width: {{$proyek->presentase}}%"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <h4 class="small font-weight-lighter">Bibit tersisa<span class="float-right">Bibit stok</span></h4>
            <h4 class="small font-weight-bolder md-title green-text">{{$proyek->bibit_tersisa}} paket <span
                    class="float-right">{{$proyek->bibit_stok}} paket</span></h4>
            <div class="devider"></div>
            <h3 class="medium text-blue text-center">
                Sebelum Beli Bibit, Yuk Pelajari Dulu!
            </h3>
            <section class="container form-row justify-content-center">
                <a href="{{$proyek->link_rab}}" class="btn btn-warning col-md-5 m-3">Pelajari Rancangan Biaya</a>
                <a href="/syarat-ketentuan" class="btn btn-info col-md-5 m-3">Pelajari Syarat dan Ketentuan</a>
        </div>
        <div class="devider"></div>
        <div class="spc-margin-center text-center">
            <p>Ayo beli bibit untuk proyek ini!</p>
            <a href="/bibit/{{$proyek -> id}}/checkout"><button
                    class="btn-center tombol btn btn-primary jumbo-button">Beli</button></a>
        </div>
    </div>
</section>
<!-- End Card -->

<!-- Main Content -->
<br><br>
<!-- end main content -->
@endsection