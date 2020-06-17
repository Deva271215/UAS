@extends('layout.master2')
@section('content')
<!-- Proyek -->
<section class="spc-hidden-bar-medium">
</section>
<div class="container">
    <h2 class="text-center text-blue font-weight-bold">Ayo Mulai #BeternakOnline!</h2>
    <h2 class="text-center text-blue font-weight-bold">"Mulailah Jadi Pahlawan"</h2>
    <div class="row">
        @foreach($data_proyek as $proyek)
        <!-- card -->
        <div class="card no-border shadow-lg border-rad-21 my-2 mx-auto" style=" width: 18rem;">
            <img class="border-rad-21 card-img spc-img-fluid card-img-top spc-card-img" src="/img/{{$proyek->gambar}}"
                alt="gambar ilustrasi">
            <div class="card-body">
                <h5 class="card-text font-weight-bold">{{$proyek->nama_proyek}}</h5>
                <p class="card-text">Harga Jual per Kg: {{$proyek->roi}}%</p>
                <p class="card-text">Durasi budidaya: {{$proyek->durasi}} hari</p>
                <p class="card-text">Bibit tersisa: <span
                        class="font-weight-bold text-center">{{$proyek->bibit_tersisa}}/</span><span
                        class="font-super-small">{{$proyek->bibit_stok}}</span> paket</p>
            </div>
            @if($proyek->bibit_tersisa == 0)
            <a href="#" class="align-items-center disabled btn detail-button btn-secondary border-rad-21"
                style="background: grey;">Habis</a>
            @endif
            @if($proyek->bibit_tersisa !== 0)
            <a href="/bibit/{{$proyek->id}}/detail"
                class="align-items-center tombol btn detail-button btn-primary">Lihat Detail</a>
            @endif
        </div>
        @endforeach
    </div>
</div>
</section>
<!-- End Proyek -->

<!-- Main Content -->
<br><br>

<!-- end main content -->
@endsection