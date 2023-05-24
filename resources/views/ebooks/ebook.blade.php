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
    {{-- <link rel="stylesheet" href="css/gallery.css"> --}}

    <style>
        #grade-area button{
            margin-right: 15px;
            margin-bottom: 20px;
        }

    </style>

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
                <h2>EBooks</h2>
                <span class="underline center"></span>
                <p class="lead">You Can Read And Download Ebooks From Here...</p>
            </div>

            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>EBooks Details</li>
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
                    <div class="container">
    
                        <!-- Start: Facts Counter -->
                        <section class="category-filter section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="filter-buttons">
                                        <div class="filter btn" data-filter="all" onclick="document.getElementById('grade-area').style.display='none';">All EBOOKS</div>
                                        <div class="filter btn" data-filter=".textbook" onclick="document.getElementById('grade-area').style.display='';">Text Books</div>
                                        <div class="filter btn" data-filter=".teachersguide" onclick="document.getElementById('grade-area').style.display='';">Teacher's Guide</div>
                                        <div class="filter btn" data-filter=".syllabus" onclick="document.getElementById('grade-area').style.display='';">Syllabus</div>
                                        <div class="filter btn" data-filter=".pastPapers" onclick="document.getElementById('grade-area').style.display='';">Past Papers</div>
                                        <div class="filter btn" data-filter=".kidsStories" onclick="document.getElementById('grade-area').style.display='none';">Kids Stories</div>
                                        {{-- <div class="filter btn" data-filter=".novels" onclick="document.getElementById('grade-area').style.display='none';">Novels</div> --}}
                                    </div>
                                
                                    <div id="category-filter">
                                        <div id="grade-area" style="display: none;">
                                            {{-- <div class="container">
                                                <div class="row">
                                                    <button class="btn btn-dark">Grade 6</button>
                                                    <button class="btn btn-dark">Grade 7</button>
                                                    <button class="btn btn-dark">Grade 8</button>
                                                    <button class="btn btn-dark">Grade 9</button>
                                                    <button class="btn btn-dark">Grade 10</button>
                                                    <button class="btn btn-dark">Grade 11</button>
                                                    <button class="btn btn-dark">Grade 12</button>
                                                    <button class="btn btn-dark">Grade 13</button>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <ul class="category-list">
                                            {{-- <div class="booksmedia-fullwidth"> --}}
                                                @foreach ($ebooks as $ebook)
                                                    @if($ebook->category=='text books')
                                                        <li class="category-item textbook">
                                                            <figure>
                                                                <img src="{{$ebook->img}}" alt="text book" style="height:350px; border: 2px solid rgb(59, 59, 59);"></a>
                                                                <figcaption class="bg-green">
                                                                    <div class="info-block">
                                                                        <h4>{{$ebook->name}}</h4>
                                                                        <p><strong>Subject : </strong>{{$ebook->subject}}</p>
                                                                        <p><strong>Grade : </strong> {{$ebook->grade}}</p>
                                                                        <a href="{{$ebook->pdf}}" target="popup" onclick="window.open('{{$ebook->pdf}}','textbook')">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>                                           
                                                        </li>
                                                    @endif
                                                        
                                                    @if($ebook->category=='teachers guide')
                                                        <li class="category-item teachersguide">
                                                            <figure>
                                                                <img src="{{$ebook->img}}" alt="teachers guide" style="height:350px; border: 2px solid rgb(59, 59, 59);"></a>
                                                                <figcaption class="bg-green">
                                                                    <div class="info-block">
                                                                        <h4>{{$ebook->name}}</h4>
                                                                        <p><strong>Subject : </strong>{{$ebook->subject}}</p>
                                                                        <p><strong>Grade : </strong> {{$ebook->grade}}</p>
                                                                        <a href="{{$ebook->pdf}}" target="popup" onclick="window.open('{{$ebook->pdf}}','textbook')">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endif
                        
                                                    @if($ebook->category=='syllabus')
                                                        <li class="category-item syllabus">
                                                            <figure>
                                                                <img src="{{$ebook->img}}" alt="syllabus" style="height:350px; border: 2px solid rgb(59, 59, 59);"></a>
                                                                <figcaption class="bg-green">
                                                                    <div class="info-block">
                                                                        <h4>{{$ebook->name}}</h4>
                                                                        <p><strong>Subject : </strong>{{$ebook->subject}}</p>
                                                                        <p><strong>Grade : </strong> {{$ebook->grade}}</p>
                                                                        <a href="{{$ebook->pdf}}" target="popup" onclick="window.open('{{$ebook->pdf}}','textbook')">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endif
                        
                                                    @if($ebook->category=='past papers')
                                                        <li class="category-item pastPapers">
                                                            <figure>
                                                                <img src="{{$ebook->img}}" alt="pastPapers" style="height:350px; border: 2px solid rgb(59, 59, 59);"></a>
                                                                <figcaption class="bg-green">
                                                                    <div class="info-block">
                                                                        <h4>{{$ebook->name}}</h4>
                                                                        <p><strong>Subject : </strong>{{$ebook->subject}}</p>
                                                                        <p><strong>Grade : </strong> {{$ebook->grade}}</p>
                                                                        <a href="{{$ebook->pdf}}" target="popup" onclick="window.open('{{$ebook->pdf}}','textbook')">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endif
                        
                                                    @if($ebook->category=='kids stories')
                                                        <li class="category-item kidsStories">
                                                            <figure>
                                                                <img src="{{$ebook->img}}" alt="kidsStories" style="height:350px; border: 2px solid rgb(59, 59, 59);"></a>
                                                                <figcaption class="bg-green">
                                                                    <div class="info-block">
                                                                        <h4>{{$ebook->name}}</h4>
                                                                        <p><strong>Subject : </strong>{{$ebook->subject}}</p>
                                                                        <p><strong>Grade : </strong> {{$ebook->grade}}</p>
                                                                        <a href="{{$ebook->pdf}}" target="popup" onclick="window.open('{{$ebook->pdf}}','textbook')">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endif  
                        
                                                    @if($ebook->category=='novels')
                                                        <li class="category-item novels" style="height:300px;">
                                                            <figure>
                                                                <img src="{{$ebook->img}}" alt="novels"></a>
                                                                <figcaption>
                                                                    <div class="info-block">
                                                                        <h4>{{$ebook->name}}</h4>
                                                                        <p><strong>Subject : </strong>{{$ebook->subject}}</p>
                                                                        <p><strong>Grade : </strong> {{$ebook->grade}}</p>
                                                                        <a href="{{$ebook->pdf}}" target="popup" onclick="window.open('{{$ebook->pdf}}','textbook','width=600,height=400, left=200, top=200')">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                                    </div>
                                                                </figcaption>
                                                            </figure>
                                                        </li>
                                                    @endif
                                                @endforeach 
                                            {{-- </div> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <br><br><br>

    <!-- End: Facts Counter -->
    
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
</body>
</html>