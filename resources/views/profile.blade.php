<!--
=========================================================
 Paper Kit 2 - v2.2.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-kit-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-kit-2/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Administator
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ route('home') }}" rel="tooltip" title="Coded by Creative Tim"
                    data-placement="bottom">
                    Katalog PRoduk
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link"><i class="nc-icon nc-layout-11"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a href="{{url('logout')}}"  class="nav-link"><i class="nc-icon nc-book-bookmark"></i> Logout</a> --}}
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Log Out
                        </a>
                        <form action="{{ route('logout') }}" method="post" id="logout-form">
                            @csrf
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header page-header-xs" data-parallax="true"
        style="background-image: url('../assets/img/fabio-mangione.jpg');">
        <div class="filter"></div>
    </div>
    <div class="section profile-content">
        <div class="container">
            <div class="owner">
                <div class="avatar">
                    <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image"
                        class="img-circle img-no-padding img-responsive">
                </div>
                <div class="name">
                    <h4 class="title">{{ Auth::user()->name }}
                        <br />
                    </h4>
                    <h6 class="description">Reseller Trusted</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, asperiores! Excepturi
                        laboriosam autem in itaque provident qui corporis sint nesciunt, dolorem nihil sunt porro error
                        at officiis eos repellendus blanditiis. </p>
                    <br />
                    <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                </div>
            </div>
            <br />
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Follows</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#following" role="tab">Following</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content following">
                <div class="tab-pane active" id="follows" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <ul class="list-unstyled follows">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4 col-4 ml-auto mr-auto">
                                            <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image"
                                                class="img-circle img-no-padding img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-4 col-4  ml-auto mr-auto">
                                            <h6>Flume
                                                <br />
                                                <small>Musical Producer</small>
                                            </h6>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-4  ml-auto mr-auto">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <hr />
                                <li>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4 col-4 mx-auto ">
                                            <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image"
                                                class="img-circle img-no-padding img-responsive">
                                        </div>
                                        <div class="col-lg-7 col-md-4 col-4">
                                            <h6>Banks
                                                <br />
                                                <small>Singer</small>
                                            </h6>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane text-center" id="following" role="tabpanel">
                    <h3 class="text-muted">Not following anyone yet :(</h3>
                    <button class="btn btn-warning btn-round">Find artists</button>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</body>

</html>
