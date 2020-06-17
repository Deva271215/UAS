<!-- BANNER -->

<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @foreach ($data_banner as $item)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$item->id}}"></li>
    @endforeach
</ol>
<div class="carousel-inner">
    <div class="carousel-item active ">
        <img class="d-block jumbotron-slide active" src="" style="background-image : url('../img/banner/3.jpg')"
            alt="First slide">
        <div class="carousel-caption font-weight-bold white d-md-block spc-caption spc-carousel-inner">
            <p>Mulailah jadi pahlawan</p>
            <h5>Ayo mulai pertanianmu bersama kami!</h5>
        </div>
    </div>
    @foreach ($data_banner as $item)
    <div class="carousel-item ">
        <img class="d-block jumbotron-slide" src="" style="background-image : url('../img/banner/{{$item->gambar}}')"
            alt="Second slide ">
        <div class="carousel-caption font-weight-bold white d-md-block spc-caption spc-carousel-inner">
            <p>{{$item->nama}}</p>
            <h5>{{$item->caption}}</h5>
            <a href="{{$item->tombol}}" class="spc-border-rad btn btn-success jumbo-button">
                Cari Tau Lagi
            </a>
        </div>
    </div>
    @endforeach
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>