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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
    .mySlides {display:none}
    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />

    <!-- Mobile Menu -->
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.positioning.css')}}">

    <!--style-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/gallery.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <!-- Start: Header Section -->
    <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-default">
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
                                    <li><a href="#">Contact</a></li>
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
                                
                                <li class="active"><a href="/ebook-view">Ebooks</a></li>
                                <li><a href="#">Contact</a></li>
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
    @if (Auth::check())
        @include('notification')
    @endif
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                {{-- <h1 style="color: rgb(255, 72, 0)">EBooks</h1> --}}
                <span class="underline center"></span>
                <p class="lead" style="font-size: 24px; color: white;">Try the virtual library explorer...</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>virtual library</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-media-gird">
                    <div class="container mt-5">

                        <!--slider start-->
                        <div class="w3-content">
                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Geography | භූගෝල විද්‍යාව</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Philosophy and Psychology<br>දර්ශනය සහ මනෝ විද්‍යාව ❯</button>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 1
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">සාමාන්‍ය කෘති</h1>
                                        <p class="card-text">General Books | பொது புத்தகங்கள்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            <img src="logo/logo.png" alt="Uva LMS" style="width: 100px;" />
                                        </div>
                                        <div class="card-body">
                                            <div class="row book-row">
                                                <div class="col one-book">
                                                    <img src="book-images/story/1.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/2.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/3.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/4.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/5.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/1.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row book-row">
                                                <div class="col one-book">
                                                    <img src="book-images/story/5.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/4.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/3.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>

                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/2.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/1.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/5.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row book-row">
                                                <div class="col one-book">
                                                    <img src="book-images/story/1.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/2.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/3.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/4.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/5.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/1.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row book-row">
                                                <div class="col one-book">
                                                    <img src="book-images/story/5.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/4.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/3.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/2.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/1.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                                <div class="col one-book">
                                                    <img src="book-images/story/5.jpg" width="120px" alt="">
                                                    <span class="badge badge-dark bottom-left">Book id</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ General Books | සාමාන්‍ය කෘති</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Religion | ආගම ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 2
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">දර්ශනය සහ මනෝ විද්‍යාව</h1>
                                        <p class="card-text">Philosophy and Psychology | தத்துவம் மற்றும் உளவியல்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Philosophy and Psychology|<br>දර්ශනය සහ මනෝ විද්‍යාව</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Language | භාෂාව ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 3
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">ආගම</h1>
                                        <p class="card-text">Religion | மதம்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Religion | ආගම</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Natural science and maths<br>ස්වාභාව විද්‍යාව සහ ගණිතය ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 4
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">භාෂාව</h1>
                                        <p class="card-text">Language | மொழி</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Language | භාෂාව</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Technology | තාක්ෂණ විද්‍යා ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 5
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">ස්වාභාව විද්‍යාව සහ ගණිතය</h1>
                                        <p class="card-text">Natural science and maths | இயற்கை அறிவியல் மற்றும் கணிதம்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Natural science and maths<br>ස්වාභාව විද්‍යාව සහ ගණිතය</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Art | කලා ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 6
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">තාක්ෂණ විද්‍යා</h1>
                                        <p class="card-text">Technology | தொழில்நுட்பம்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Technology | තාක්ෂණ විද්‍යා</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Literature | සාහිත්‍ය ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 7
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">කලා</h1>
                                        <p class="card-text">Art | கலை</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Art | කලා</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Geography | භූගෝල විද්‍යාව ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 8
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">සාහිත්‍ය</h1>
                                        <p class="card-text">Literature | இலக்கியம்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                            <div class="mySlides">
                                <div class="w3-center mb-4">
                                    <div class="w3-section">
                                      <button class="w3-button w3-light-grey" style="margin-right: 50%;" onclick="plusDivs(-1)">❮ Literature | සාහිත්‍ය</button>
                                      <button class="w3-button w3-light-grey" onclick="plusDivs(1)">General Books | සාමාන්‍ය කෘති ❯</button>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="card text-white bg-dark text-center" style="width: 600px;">
                                        <div class="card-header">
                                        Rack 9
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title">භූගෝල විද්‍යාව</h1>
                                        <p class="card-text">Geography | நிலவியல்</p>
                                        </div>
                                        <div class="card-footer">
                                        see more
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5 justify-content-center">
                                    <div class="card text-white book-rack">
                                        <div class="card-header text-center">
                                            sub category name
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                1st
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                2nd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                3rd
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="book-row">
                                                4th
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            see more
                                        </div>
                                    </div>                            
                                </div><!--End row-->
                            </div><!--mySlides-->

                        </div>
                        <!--slider end-->

                    </div><!--End container-->
                </div><!--End books-media-gird-->
            </main><!--End site-main-->
        </div><!--End content-area-->
    </div><!--End site-content-->

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
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n){
            showDivs( slideIndex +=n );
        }

        function currentDiv(n){
            slideIndex = n;
        }

        function showDivs(n){
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-red", "");    
            }
            x[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " w3-red";
        }
    </script>
    <script>
        if ({{!Auth::check()}}) {
            document.getElementById("user-req").style.display = "none";
        }
    </script>
</body>
</html>