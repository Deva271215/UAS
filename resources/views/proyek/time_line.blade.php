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
                        <a class="nav-link font-dark" href="/bibit">Proyek Pendanaan<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-dark" href="/belanja">Pasar Petani</a>
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
    <section class="spc-hidden-bar"></section>

    <head>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                /* background-color: #474e5d; */
                font-family: Helvetica, sans-serif;
            }

            /* The actual timeline (the vertical ruler) */
            .timeline {
                position: relative;
                max-width: 1200px;
                margin: 0 auto;
            }

            /* The actual timeline (the vertical ruler) */
            .timeline::after {
                content: '';
                position: absolute;
                width: 6px;
                background-color: #1D928F;
                color: white;
                top: 0;
                bottom: 0;
                left: 10%;
                margin-left: -3px;
            }

            /* Container around content  */
            .spc-container {
                padding: 10px 60px;
                position: relative;
                background-color: inherit;
                width: 80%;
            }

            /* The circles on the timeline */
            .spc-container::after {
                content: '';
                position: absolute;
                width: 25px;
                height: 25px;
                right: -17px;
                background-color: white;
                border: 4px solid #1D928F;
                top: 15px;
                border-radius: 50%;
                z-index: 1;
            }

            /* Place the container to the left */
            .left {
                left: 0;
            }

            /* Place the container to the right */
            .right {
                left: 10%;
            }

            /* Add arrows to the left container (pointing right) */
            .left::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                right: 30px;
                border: medium solid white;
                border-width: 10px 0 10px 10px;
                border-color: transparent transparent transparent white;
            }

            /* Add arrows to the right container (pointing left) */
            .right::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                left: 50px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent #1D928F transparent transparent;
            }

            /* Fix the circle for containers on the right side */
            .right::after {
                left: -13px;
            }

            /* The actual content */
            .content {
                padding: 20px 30px;
                background-color: #1D928F;
                color: white;
                position: relative;
                border-radius: 6px;
            }

            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {

                /* Place the timelime to the left */
                .timeline::after {
                    left: 31px;
                }

                /* Full-width containers */
                .container {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                }

                /* Make sure that all arrows are pointing leftwards */
                .container::before {
                    left: 60px;
                    border: medium solid white;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }

                /* Make sure all circles are at the same spot */
                .left::after,
                .right::after {
                    left: 15px;
                }

                /* Make all right containers behave like the left ones */
                .right {
                    left: 0%;
                }
            }

            @media screen and (max-width: 360px) {
                .spc-container {
                    padding: 10px 60px;
                    position: relative;
                    background-color: inherit;
                    width: 100%;
                }

                /* Place the timelime to the left */
                .timeline::after {
                    left: 28px;
                }

                /* Full-width containers */
                .container {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                }

                /* Make sure that all arrows are pointing leftwards */
                .container::before {
                    left: 60px;
                    border: medium solid white;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }

                /* Make sure all circles are at the same spot */
                .left::after,
                .right::after {
                    left: 15px;
                }

                /* Make all right containers behave like the left ones */
                .right {
                    left: 0%;
                }

                @media screen and (max-width: 364px) {

                    /* Place the timelime to the left */
                    .timeline::after {
                        left: 28px;
                    }

                    /* Full-width containers */
                    .container {
                        width: 100%;
                        padding-left: 70px;
                        padding-right: 25px;
                    }

                    /* Make sure that all arrows are pointing leftwards */
                    .container::before {
                        left: 60px;
                        border: medium solid white;
                        border-width: 10px 10px 10px 0;
                        border-color: transparent white transparent transparent;
                    }

                    /* Make sure all circles are at the same spot */
                    .left::after,
                    .right::after {
                        left: 15px;
                    }

                    /* Make all right containers behave like the left ones */
                    .right {
                        left: 0%;
                    }
                }
            }
        </style>
    </head>

<body id="page-top">
    <div class="timeline">
        @foreach($data_timeline as $tline)
        <div class="spc-container right">
            <div class="content">
                <p>{{$tline->created_at->format('D d F Y')}}</p>
                <p>{{$tline->description}}</p>
            </div>
        </div>
        @endforeach
        {{-- <div class="spc-container right">
            <div class="content">
                <h2>2012</h2>
                <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea
                    mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto
                    primis ea eam.</p>
            </div>
        </div>
        <div class="spc-container right">
            <div class="content">
                <h2>2007</h2>
                <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea
                    mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto
                    primis ea eam.</p>
            </div>
        </div> --}}
    </div>

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
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Follow</div>
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
<!-- <script type="text/javascript">
    $(window).scroll(function() {
        if ($(window).scrollTop() > 90) {
            $('.atas').addClass('scroll-to-top');
            $('.ikon').addClass('fa-angle-up');
            $('.header').addClass('fix-head');
            $('.header').addClass('animated--fade-in');
        } else {
            $('.atas').removeClass('scroll-to-top');
            $('.ikon').removeClass('fa-angle-up');
            $('.header').removeClass('fix-head');
            $('.header').removeClass('animated--fade-in');
        }
    });
</script> -->
@yield('script')
</footer>
</body>

</html>