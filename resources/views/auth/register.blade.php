 {{-- <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="/back/vendors/images/register-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="true">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h4>Register</h4>
                            <section>
                                <div class="form-wrap max-width-600 mx-auto">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Username*</label>
                                        <div class="col-sm-5">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required
                                                autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Email Address*</label>
                                        <div class="col-sm-5">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required
                                                autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Password*</label>
                                        <div class="col-sm-5">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Confirm Password*</label>
                                        <div class="col-sm-5">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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
         Paper Kit by Creative Tim
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

 <body class="register-page sidebar-collapse">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
         <div class="container">
             <div class="navbar-translate">
                 <a class="navbar-brand" href="{{ route('home') }}" rel="tooltip" title="Coded by Creative Tim"
                     data-placement="bottom" target="_blank">
                     KATALOG PRODUK
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
                         <a href="{{ route('home') }}" class="nav-link"><i class=""></i> Home</a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('login') }}" target="_blank" class="nav-link"><i
                                 class=""></i> Login</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- End Navbar -->
     <div class="page-header" style="background-image: url('../assets/img/login-image.jpg');">
         <div class="filter"></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 ml-auto mr-auto">
                     <div class="card card-register">
                         <h3 class="title mx-auto">Welcome</h3>
                         <form method="POST" action="{{ route('register') }}">
                             @csrf
                             <label>{{ __('Username') }}</label>
                             <input id="name" type="text"
                                 class="form-control @error('name') is-invalid @enderror" name="name"
                                 value="{{ old('name') }}" required autocomplete="name" autofocus>

                             @error('name')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                             <label>{{ __('Email Address') }}</label>
                             <input id="email" type="email"
                                 class="form-control @error('email') is-invalid @enderror" name="email"
                                 value="{{ old('email') }}" required autocomplete="email">

                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                             <label>{{ __('Password') }}</label>
                             <input id="password" type="password"
                                 class="form-control @error('password') is-invalid @enderror" name="password" required
                                 autocomplete="new-password">

                             @error('password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                             <label>Cofim Password</label>
                             <input id="password-confirm" type="password" class="form-control"
                                 name="password_confirmation" required autocomplete="new-password">
                             <center>
                                 <button type="submit" class="btn btn-danger">
                                     {{ __('Register') }}
                                 </button>
                             </center>
                         </form>
                     </div>
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
