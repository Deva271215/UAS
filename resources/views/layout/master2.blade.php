<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- CSS -->
    <link href="/css/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://font.googleapis.com/css?family=Viga">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/sb-admin/sb-admin-2.css">
    <link rel="stylesheet" href="/css/sb-admin/sb-admin-2.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Teampal.id</title>
    <!-- Navbar -->
    <nav class="header fix-head shadow navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand font-dark title-center" href="/">Teampal<sup>.id</sup></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav font-d ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link font-dark" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-dark" href="/bibit">Bibit Ternak<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-dark" href="/belanja">Hasil Panen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-dark" href="/tentang">Tentang</a>
                    </li>
                    <li class="nav-item font-dark">
                        <a class="tombol bt-hub btn btn-block btn-primary" href="https://wa.me/6288703380063">Hubungi
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of navbar -->
</head>

<body id="page-top">

    @yield('content')

</body>

<footer>
    <!-- Scroll to top button -->
    <a class=" atas scroll-to-top rounded" href="#page-top" style="display: inline;">
        <i class="ikon fas fa-angle-up fa-1x"></i>
    </a>
    <!-- end scroll button -->
    <div class="page-footer color-green mt-5 text-center">
        <h1 class="text-white footer-text">Mau Tau Informasi Menarik<br>Tentang Pertanian?</h1>
        <h1 class="text-white footer-text-mini">Ayo Ikuti TEAMPAL</h2>
            <a href="http://instagram.com/teampal.id" class="tombol followbutton btn btn-primary mx-5">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="instaIcon fab fa-instagram fa-2x"></i>
                    </div>
                    <div class="col m-1 mx-2 followText">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Instagram</div>
                    </div>
                </div>
            </a>
            <div class="m-1"></div>
            <a href="http://instagram.com/teampal.id" class="tombol followbutton btn btn-primary mx-5">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="instaIcon fab fa-wa fa-2x"></i>
                    </div>
                    <div class="col m-1 mx-2 followText">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Whatsapp</div>
                    </div>
                </div>
            </a>
            <!-- Footer -->
            <footer class="sticky-footer mFooter text-white">
                <div class="container my-1">
                    <div class="copyright text-center">
                        <span>Copyright &copy; Teampal<sup>.id</sup> 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
    </div>
</footer>
<!-- Optional JavaScript -->
<script src="https://kit.fontawesome.com/e0f36f85cd.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-3.4.1.min.js"> </script>
<script src="/js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="/css/js/bootstrap.min.js"></script>

@yield('script')

</footer>
</body>

</html>