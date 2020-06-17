@extends('layout.master')

@section('content')
<div id="page-top"></div>
<!-- Carosel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    {{-- Carousel --}}
    @include('banner')

    <!-- End Carosel -->

    <!-- Pilih Bibit -->
    <div class="spc-bar text-center spc-bar-p">
        <p class="text-center white h3">Apa itu Teampal.id?</p>
        <a href="#desc">
            <div class="tombol btn btn-primary jumbo-button">
                Cari Tau!
            </div>
        </a>
    </div>
    <section id="desc" class="spc-hidden-bar-medium"></section>
    <section class="spc-hidden-bar-medium"></section>
    <!-- end Pilih Bibit -->

    <!-- Main Content -->
    <section class="container main-content">
        <div class="row">
            <div class="row containerSection">
                <div class="col s12 16">
                    <h1 class="spc-weight">Apa itu Teampal.id?</h1>
                    <h5>Teampal.id adalah <span class="text-blue spc-weight">Toko Online Unik</span> yang <span
                            class="text-blue spc-weight">menjual</span>
                        <span class="text-blue spc-weight">paket</span>
                        budidaya <span class="text-blue spc-weight">ternak</span>
                        sekaligus menyediakan
                        tempat <span class="text-blue spc-weight ">penitipan ternak</span>. Sehingga anda dapat
                        beternak
                        tanpa perlu membangun
                        kandang, menyisihkan
                        waktu luang dan skill beternak.</h5>
                    <br>
                    <a href="https://wa.me/6288703380063">
                        <div class="tombol btn btn-primary jumbo-button">
                            Tanyakan Admin
                        </div>
                    </a>
                </div>
                <div class="img-center">
                    <img class="gambar img-fluid" src="img/aset/fish.png" alt="ikan">
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Content -->

    <!-- Scroll to top button -->
    <a class="atas scroll-to-top rounded" href="#page-top" style="display: inline;">
        <i class="ikon fas fa-angle-up fa-1x"></i>
    </a>
    <!-- end scroll button -->

    <!-- Langkah-langkah -->
    <section class="container main-content" id="langkah">
        <h2 class="text-center text-blue spc-weight">Langkah Mudah Mulai #BeternakOnline</h2>
        <div class="">
            <!-- Langkah 1 -->
            <div class="row centertext">
                <div class="spc-m-card col s12 shadow border-rad-21 my-2 mx-2">
                    <img src="img/aset/pilih-proyek.png" alt="pilih proyek" class="langkah">
                    <div>
                        <h5>1. Pilih Bibit</h5>
                        <p class="bottom-20">Pilih bibit yang ingin kamu budidayakan
                            , pelajari keuntungan dan risikonya</p>
                    </div>
                </div>

                <!-- Langkah 2 -->
                <div class="spc-m-card col s12 shadow border-rad-21 my-2 mx-2">
                    <img src="img/aset/transfer.png" alt="pilih proyek" class="langkah">
                    <div>
                        <h5>2. Bayar bibit</h5>
                        <p class="bottom-20">Dengan modal kurang dari 50 ribu kamu sudah bisa beternak online.</p>
                    </div>
                </div>
                <!-- Langkah 3 -->
                <div class="spc-m-card col s12 shadow border-rad-21 my-2 mx-2">
                    <img src="img/aset/seo.png" alt="pilih proyek" class="langkah">
                    <div>
                        <h5>3. Pantau perkembangan bibitmu</h5>
                        <p class="bottom-20">Cek perkembangan bibitmu melalui timeline webiste.</p>
                    </div>
                </div>
                <!-- Langkah 4 -->
                <div class="spc-m-card col s12 shadow border-rad-21 my-2 mx-2">
                    <img src="img/aset/bank (1).png" alt="pilih proyek" class="langkah">
                    <div>
                        <h5>4. Dapatkan Hasil Panen</h5>
                        <p class="bottom-20">Ketika panen, kamu dapat mengambil hewan ternakmu atau
                            minta kami membantu menjualnya</p>
                    </div>
                </div>
                <!-- Langkah 5 -->
                <div class="spc-m-card col s12 shadow border-rad-21 my-2 mx-2">
                    <img src="img/aset/bank (1).png" alt="pilih proyek" class="langkah">
                    <div>
                        <h5>5. Bayar biaya penitipan saat panen</h5>
                        <p class="bottom-20"> Anda akan membayar biaya penitipan ketika ternak berhasil
                            panen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End langkah -->
    <!-- Proyek -->
    <section class="spc-hidden-bar" id="page-proyek"></section>
    <div class="container main-content">
        <h2 class="text-center text-blue spc-weight">Pilih Bibit Ternakmu!</h2>
        <br>
        <div class="row">
            @foreach($data_proyek as $proyek)
            <!-- card -->
            <div class="card no-border shadow-lg border-rad-21 my-2 mx-auto" style=" width: 18rem;">
                <img class="border-rad-21 card-img spc-img-fluid card-img-top spc-card-img"
                    src="/img/{{$proyek->gambar}}" alt="gambar ilustrasi">
                <div class="card-body">
                    <h5 class="card-text font-weight-bold">{{$proyek->nama_proyek}}</h5>
                    <p class="card-text">Harga jual panen: Rp {{$proyek->roi}}</p>
                    <p class="card-text">Durasi penitipan: {{$proyek->durasi}} hari</p>
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
    <!-- End Proyek -->
    @endsection