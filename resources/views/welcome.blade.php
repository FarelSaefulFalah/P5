<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Katalog Produk</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/gaia.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="http://www.creative-tim.com" class="navbar-brand">
                    Katalog Produk
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li>
                        <a href="#" target="_blank">Home</a>
                    </li>
                    <li>
                        <a href="#produk">Produk</a>
                    </li>
                     <li>
                        <a href="#tentang">Tentang</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('assets/img/header-1.jpeg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Katalog Produk</h1>
                        <h3>Website tentang informasi pakaian - pakaian. </h3>
                        <div class="separator line-separator">♦</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section" id="produk">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Produk</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolor velit repudiandae exercitationem adipisci quos ratione, itaque aut voluptas accusamus in, reprehenderit expedita totam delectus excepturi recusandae impedit laudantium suscipit.
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row py-4">
                        @foreach ($produk as $item)
                            <div class="col-md-4">
                                <div class="card card-member" style="max-height: 400px; max-width: 300px">
                                    <div class="content">
                                        <div class="card-head">
                                            <img alt="..." width="300px" height="230px"
                                                src="{{ asset('images/produk/' . $item->gambar) }}" />
                                        </div>
                                        <div class="description">
                                            <a href="/produk/{{ $item->id }}">
                                                <h3 class="title">{{ $item->nama_produk }}</h3>
                                                <button
                                                    class="btn btn-link btn-danger btn-block btn-round">Lihat</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        @foreach ($produk as $item)
                            <div class="col-md-4">
                                <div class="card card-member" style="max-height: 400px; max-width: 300px">
                                    <div class="content">
                                        <div class="card-header">
                                            <img alt="..." src="{{ asset('images/produk/' . $item->gambar) }}" width="300px" height="200px" />
                                        </div>
                                        <div class="description">
                                            <h3 class="title">{{ $item->nama_produk }}</h3>
                                            <a href="/produk/{{ $item->id }}">
                                                <button
                                                    class="btn btn-link btn-danger btn-block btn-round">Lihat</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image" style="background-image: url('assets/img/office-1.jpeg')">
            </div>
            <div class="container" id="tentang">
                <div class="title-area">
                    <h2 class="text-white">Tentang Kami</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description">Kami Menyediakan Berbagai informasi tentang pakaian-pakaian di website ini dengan tujuan memudahkan seseorang untuk mengetahui kualitas produk.</p>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Perusahaan</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Beranda</a>
                                </li>
                                <li>
                                    <a href="#">Temukan Penawaran</a>
                                </li>
                                <li>
                                    <a href="#">Portfolio Kita</a>
                                </li>
                                <li>
                                    <a href="#">Tentang Kami</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Bantuan & Dukungan</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Kontak Kita</a>
                                </li>
                                <li>
                                    <a href="#">Cara Kerjanya</a>
                                </li>
                                <li>
                                    <a href="#">Syarat &amp; Ketentuan</a>
                                </li>
                                <li>
                                    <a href="#">Kebijakan Perusahaan</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Ikuti Kami Di</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script> KATLOG
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>
