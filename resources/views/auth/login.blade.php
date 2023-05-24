{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has("success"))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::has("error"))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
                    <a href="/"><img src="{{asset('dist/img/schoolLogo.png')}}" alt="School Logo" height="50px"></a>
                </div>

                <div class="card-body">
                    <h3 class="mb-5 text-uppercase" style="text-align: center;">User Login</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<!DOCTYPE html>
<?php $notifications = DB::table('notifications')->get();?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Library | Uva Collage</title>

    <!--favicon icons-->
    <link rel="shortcut icon" href="favicon/icon.png" type="image/x-icon"/>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

    <!-- Mobile Menu -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/menu.positioning.css">

    <!--style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">

</head>
<body>
    @if (Auth::check())
        @include('notification')
    @endif
    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index-2.html">
                                            <img src="logo/logo.png" alt="Uva LMS" style="width: 200px;" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Header Topbar -->
                            <div class="header-topbar hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="topbar-info">
                                            <a href="#"><i class="fa fa-phone"></i>055 - 123 4569</a>
                                            <span>/</span>
                                            <a href="#"><i class="fa fa-envelope"></i>uvacollage@gmail.com</a>
                                        </div>
                                    </div>

                                    @include('header')

                                </div>
                            </div>
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/books-gride">Books</a></li>
                                    <li><a href="/subject-books">Subjects</a></li>
                                    
                                    <li><a href="/ebook-view">Ebooks</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    @if (Auth::check())
                                        @if (Auth::user()->is_admin == 1)
                                            <li id="user-req"><a href="" data-toggle="modal" data-target="#admin-profile">Profile</a></li>
                                        @elseif(substr(Auth::user()->memberid, 0,1) == 'ST')
                                            <li id="user-req"><a href="{{route('user.profile', Auth::user()->memberid)}}">Profile</a></li>
                                        @else
                                            <li id="user-req"><a href="{{route('user.profile', Auth::user()->memberid)}}">Profile</a></li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Navigation</h4>
                                    <a href="#" class="close"></a>
                                </li>
                                <li><a href="/">Home</a></li>
                                <li><a href="/books-gride">Books</a></li>
                                <li><a href="/subject-books">Subjects</a></li>
                                
                                <li><a href="/ebook-view">Ebooks</a></li>
                                <li><a href="/contact">Contact</a></li>
                                @if (Auth::check())
                                    @if (Auth::user()->is_admin == 1)
                                        <li id="user-req"><a href="" data-toggle="modal" data-target="#admin-profile">Profile</a></li>
                                    @elseif(substr(Auth::user()->memberid, 0,1) == 'ST')
                                        <li id="user-req"><a href="{{route('user.profile', Auth::user()->memberid)}}">Profile</a></li>
                                    @else
                                        <li id="user-req"><a href="{{route('user.profile', Auth::user()->memberid)}}">Profile</a></li>
                                    @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Log In</h2>
                <span class="underline center"></span>
                <p class="lead">Login to access library.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Log In</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="contact-us">
                        <div class="container">
                            
                            <div class="row">
                                <div class="contact-area">
                                    <div class="container">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <img src="{{asset('images/wellcome-image.jpg')}}" alt="School Logo" width="350px">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>LOG IN</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form id="ContactForm" action="{{ route('login') }}" method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                <span class="first-letter">Email</span>  
                                                                            </label>
                                                                            <input class="form-control" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                                            @error('email')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>
                                                                                <span class="first-letter">Password</span>  
                                                                            </label>
                                                                            <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                                            @error('password')
                                                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <button type="submit" class="btn btn-primary">
                                                                                {{ __('Login') }}
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            @if (Session::has("error"))
                                                                <div id="fail-msg" style="display: none;">
                                                                    <span style="color: rgb(193, 0, 0);"> {{ Session::get('error') }}</span>
                                                                </div>
                                                            @endif 

                                                            @if (Route::has('password.request'))
                                                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a> --}}
                                                                <a class="btn btn-link" href="" data-toggle="modal" data-target="#forgotpassword">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </div>                                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Contact Us Section -->

    {{-- Password reset --}}
    <div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 600px;" id="otp-send">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel" style="float: left;">{{ __('Reset Password') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        
                        <form id="forgot_password">
                            @csrf
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="email">{{ __('Your Email Address') }}</label>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <input id="emailotp" type="email" class="form-control @error('emailotp') is-invalid @enderror" name="emailotp" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('emailotp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div id="fail-msg-otp" style="display: none;">
                                <span style="color: rgb(193, 0, 0);">Something went wrong.</span>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Password Reset Pin') }}
                    </button>
                </div>
                    </form>
            </div>

            {{-- otp confirm form --}}
            <div class="modal-content" style="width: 600px; display: none;" id="otpconfirm">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel" style="float: left;">{{ __('Verify user') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div id="success-msg" style="display: none;">
                            <span style="color: rgb(0, 193, 0);">Success! password reset pin has been sent to your mobile.</span>
                        </div>
                        <form method="POST" action="/reset-pin">
                            @csrf
                            <div class="col-md-12 col-sm-6">
                                <div class="form-group row">
                                    <label for="pin">{{ __('Reset Pin') }}</label>
                                </div>
                                <div class="form-group col-md-6 row">
                                    <input id="pin" type="text" class="form-control @error('pin') is-invalid @enderror" name="pin" required autofocus>

                                    @error('pin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        {{ __('click here to verify') }}
                    </button>
                </div>
                    </form>
            </div>
        </div>
    </div>

    @include('footer')
    
    <!-- jQuery Latest Version 1.x -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- jQuery UI -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Mobile Menu -->
    <script src="js/mmenu.min.js"></script>
    <!-- Harvey - State manager for media queries -->
    <script src="js/harvey.min.js"></script>
    <!-- Waypoints - Load Elements on View -->
    <script src="js/waypoints.min.js"></script>
    <!-- Facts Counter -->
    <script src="js/facts.counter.min.js"></script>
    <!-- MixItUp - Category Filter -->
    <script src="js/mixitup.min.js"></script>

    <!--gallery view-->
    <script src="js/jquery.hislide.js"></script>

    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Accordion -->
    <script src="js/accordion.min.js"></script>
    <!-- Responsive Tabs -->
    <script src="js/responsive.tabs.min.js"></script>
    <!-- Responsive Table -->
    <script src="js/responsive.table.min.js"></script>
    <!-- Masonry -->
    <script src="js/masonry.min.js"></script>
    <!-- Carousel Swipe -->
    <script src="js/carousel.swipe.min.js"></script>
    <!-- bxSlider -->
    <script src="js/bxslider.min.js"></script>
    <!-- Custom Scripts -->
    <script src="js/main.js"></script>

    <script src="https://kit.fontawesome.com/ff2d286ff7.js" crossorigin="anonymous"></script>
    <script>
        if ({{!Auth::check()}}) {
            document.getElementById("user-req").style.display = "none";
        }
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript">
        $('#forgot_password').on('submit',function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.

            $.ajax({
                type: 'POST',
                url: '{{route("forgot-password")}}',
                data: {
                    "_token": "{{csrf_token()}}",
                    email: $('#emailotp').val()
                },
                success: function(response) {
                    if(response.success) {
                        $('#otp-send').style.display="none";
                        $('#otpconfirm').show();
                    } else {
                        $('#fail-msg-otp').show();
                    }
                },
            });
        });
    </script>
</body>
</html>
