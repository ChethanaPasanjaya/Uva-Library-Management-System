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

</head>
<body class="layout-v2">
    @if (Auth::check())
        @include('errors/useralert')
        @include('notification')
        @if (Auth::user()->is_admin == 1)
            @include('admin/pages/adminProfile')
        @endif
    @endif
   <!-- Start: Header Section -->
   <header id="header" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="col-sm-12">
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
                        <div class="bg-light">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="navbar-header">
                                        <div class="navbar-brand">
                                            <a href="#">
                                                <img src="logo/logo.png" alt="Uva LMS" style="width: 200px;" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="navbar-collapse hidden-sm hidden-xs">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="/">Home</a></li>
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
                                
                                <li><a href="/ebooks">Ebooks</a></li>
                                <li><a href="/contact">Contact</a></li>
                                @if (Auth::check())
                                    @if (Auth::user()->is_admin == 1)
                                        <li id="user-req"><a href="" data-toggle="modal" data-target="#admin-profile">Profile</a></li>
                                        <li><a href="{{route('admin.panel')}}" class="btn btn-dark">Admin Panel</a></li>
                                    @elseif(substr(Auth::user()->memberid, 0,1) == 'ST')
                                        <li id="user-req"><a href="{{route('user.profile', Auth::user()->memberid)}}">Profile</a></li>
                                    @else
                                        <li id="user-req"><a href="{{route('user.profile', Auth::user()->memberid)}}">Profile</a></li>
                                    @endif
                                    <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <li><a href="{{route('login')}}"><i class="fa fa-lock"></i>Login /</a></li>
                                    <li><a href="{{route('registration')}}">Register</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->

    <!-- Start: Slider Section -->
    <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
        <!-- Carousel slides -->
        <div class="carousel-inner">
            <div class="item active">
                <figure>
                    <img alt="Home Slide" src="images/header-slider/home-v2/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Online Library Anytime, Anywhere!</h3>
                        <h2>This is your school library</h2>
                        <p>Badulla Uva College, We give our student the opportunity to access the school library anytime, anywhere.</p>
                        <div class="slide-buttons hidden-sm hidden-xs">    
                            <a href="www.facebook.com/uvacollegeB" class="btn btn-primary">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img alt="Home Slide" src="images/header-slider/home-v2/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>මාර්ගගත පුස්තකාලය ඕනෑම වේලාවක, ඕනෑම තැනක!</h3>
                        <h2>මේ ඔබේ පාසල් පුස්තකාලයයි</h2>
                        <p>බදුල්ල ඌව විද්‍යාලය, අපි අපගේ ශිෂ්‍යයාට ඕනෑම වේලාවක, ඕනෑම තැනක පාසල් පුස්තකාලයට ප්‍රවේශ වීමට අපි අවස්ථාව ලබා දෙන්නෙමු.</p>
                        <div class="slide-buttons hidden-sm hidden-xs">    
                            <a href="http://www.facebook.com/uvacollegeB" class="btn btn-primary">වැඩිපුර විස්තර</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <figure>
                    <img alt="Home Slide" src="images/header-slider/home-v2/header-slide.jpg" />
                </figure>
                <div class="container">
                    <div class="carousel-caption">
                        <h3>ஆன்லைன் நூலகம் எந்த நேரத்திலும், எங்கும்!</h3>
                        <h2>இது உங்கள் பள்ளி நூலகம்</h2>
                        <p>பதுளை ஊவா கல்லூரி, எமது மாணவ மாணவியருக்கு எந்த நேரத்திலும், எந்த இடத்திலும் பாடசாலை நூலகத்தை அணுகுவதற்கான வாய்ப்பை வழங்குகிறோம்.</p>
                        <div class="slide-buttons hidden-sm hidden-xs">    
                            <a href="http://www.facebook.com/uvacollegeB" class="btn btn-primary">கூடுதல் தகவல்கள்</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home-v1-header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#home-v1-header-carousel" data-slide-to="1"></li>
            <li data-target="#home-v1-header-carousel" data-slide-to="2"></li>
        </ol>
    </div>
    <!-- /Slider Section -->

    <!-- Start Search Section -->
    <section class="search-filters">
        <div class="container">
            <div class="filter-box">
                <h3 style="margin-bottom: 0%;">What are you looking for at the library?</h3>
                <h3 style="margin-bottom: 0%; font-size: 22pt;" >ඔබ පුස්තකාලයේ සොයන්නේ කුමක්ද?</h3>
                <h3 style="font-size: 17pt;">நூலகத்தில் என்ன தேடுகிறீர்கள்?</h3>
                <form action="{{ route('book.search') }}" method="post">
                    @csrf
                    <div class="col-md-2 col-sm-6"></div>
                    <div class="col-md-2 col-sm-6">
                        {{-- <div class="form-group">
                            <label class="sr-only" for="keywords">Search by Keyword</label>
                            <input class="form-control" placeholder="Search by Keyword" id="keywords" name="keywords" type="text">
                        </div> --}}
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <select name="category" id="category" class="form-control">
                                <option disabled="disabled">All Categories</option>
                                @foreach ($category as $item)
                                    <option value="{{$item->categoryId}}">{{$item->categoryName}}</option>
                                @endforeach                                
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="submit" value="Search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Search Section -->
    
    <!-- Start Features -->
    <section class="features">
        <div class="container">
            <ul>
                <li class="light-green-hover">
                    <div class="feature-box">
                        <i class="yellow"></i>
                        <h3>Books</h3>
                        <p>You can choose your favorite books<br>ඔබට ඔබේ ප්‍රියතම පොත් තෝරා ගත හැකිය<br>புத்தகங்கள்</p>
                        <a class="yellow" href="/books-gride">
                            View Selection <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="yellow-hover">
                    <div class="feature-box">
                        <i class="light-green"></i>
                        <h3>eBooks</h3>
                        <p>You can read books online or download ebooks<br>ඔබට අන්තර්ජාලයෙන් පොත් කියවන්න පුළුවන්<br>மின்புத்தகங்கள்</p>
                        <a class="light-green" href="/ebook-view">
                            View Selection <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                {{-- <li class="red-hover">
                    <div class="feature-box">
                        <i class="blue"></i>
                        <h3>DVDs</h3>
                        <p>You can place a order for educational DVDs<br>අධ්‍යාපනික DVD තැටි<br>கல்வி டிவிடிகள்</p>
                        <a class="blue" href="#">
                            View Selection <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li> --}}
                <li class="blue-hover">
                    <div class="feature-box">
                        <i class="red"></i>
                        <h3>Magazines</h3>
                        <p>You can read magazines<br>ඔබට සඟරා කියවිය හැකිය<br>நீங்கள் பத்திரிகைகளைப் படிக்கலாம்</p>
                        <a class="red" href="#">
                            View Selection <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                {{-- <li class="green-hover">
                    <div class="feature-box">
                        <i class="violet"></i>
                        <h3>Musics</h3>
                        <p>You can listen musics<br>ඔබට සංගීතයට සවන් දිය හැකිය<br>நீங்கள் இசையைக் கேட்கலாம்</p>
                        <a class="violet" href="#">
                            View Selection <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li>
                <li class="violet-hover">
                    <div class="feature-box">
                        <i class="green"></i>
                        <h3>eAudio</h3>
                        <p>You can download eaudios<br>ඔබට eaudios බාගත කළ හැකිය<br>நீங்கள் eaudios பதிவிறக்கம் செய்யலாம்</p>
                        <a class="green" href="#">
                            View Selection <i class="fa fa-long-arrow-right"></i>
                        </a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </section>
    <!-- End Features -->

    <!-- Start: Category Filter -->
    <section class="category-filter section-padding">
        <div class="container">
            <div class="row">
                <div class="center-content">
                    <h2 class="section-title">New | නව | புதிய</h2>
                    <span class="underline center"></span>
                </div>
                <div id="category-filter">
                    <ul class="category-list">
                        @foreach ($books as $book)
                            <li class="category-item" style="height: 400px;">
                                <figure>
                                    <img src="book-images/{{ $book->book_image }}" alt="New Releaase" />
                                    <figcaption class="bg-red">
                                        <div class="diamond">
                                            <i class="book"></i>
                                        </div>
                                        <div class="info-block">
                                            <h4>{{ $book->book_name }}</h4>
                                            <p>Book Id: {{ $book->book_id }}</p>
                                            <span class="author"><strong>Author:</strong> {{ $book->author_name }}</span>
                                            <div class="rating">
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                                <span>☆</span>
                                            </div>
                                            <p>{{ $book->book_desc }}</p>
                                            @if (Auth::check())
                                                @if ( $book->quantity > 0)
                                                    @if($book->category_id == 'C|AD|16')
                                                        @if ($grade = DB::table('user_students')->where('Stu_Id',Auth::user()->memberid)->first())
                                                            @if($grade->Grade >= 10)
                                                                <li style="color:aquamarine;">{{$book->quantity}} copies available</li>
                                                                <li>
                                                                    {{-- <button data-toggle="modal" data-target="#borrow-book">Borrow</button> --}}
                                                                    <button data-toggle="modal" data-target="#demoModal-{{$book->id}}">Borrow <i class="fa fa-long-arrow-right"></i></button>
                                                                </li>
                                                            @else
                                                                <li style="color: rgb(255, 251, 0)">You cannot borrow book in this category!</li>
                                                            @endif
                                                        @else
                                                            <li style="color:aquamarine;">{{$book->quantity}} copies available</li>
                                                            <li>
                                                                {{-- <button data-toggle="modal" data-target="#borrow-book">Borrow</button> --}}
                                                                <button data-toggle="modal" data-target="#demoModal-{{$book->id}}">Borrow <i class="fa fa-long-arrow-right"></i></button>
                                                            </li>
                                                        @endif
                                                    @else
                                                        <li style="color:aquamarine;">{{$book->quantity}} copies available</li>
                                                        <li>
                                                            {{-- <button data-toggle="modal" data-target="#borrow-book">Borrow</button> --}}
                                                            <button data-toggle="modal" data-target="#demoModal-{{$book->id}}">Borrow <i class="fa fa-long-arrow-right"></i></button>
                                                        </li>  
                                                    @endif
                                                @else
                                                    <li style="color: gold">Not Available</li>
                                                @endif
                                            @else
                                                <li style="color: rgb(255, 247, 0)"> You must login to borrow </li>
                                                <li><a href="{{route('login')}}"><i class="fa fa-lock"></i> Login </a></li>
                                            @endif
                                            
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                            @include('admin/pages/borrow-confirm')
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Start: Category Filter -->

    <!-- Start: Welcome Section -->
    <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="welcome-wrap">
                        <div class="welcome-text">
                            <h2 class="section-title">Welcome to the Uva Collage Online Library</h2>
                            <span class="underline left"></span>
                            <p>Uva College Badulla was established in 1867 and is a public school in the Uva province of Sri Lanka. Mr. D. K. M. Jayathissa is the principal of this national school, which is run by the central government. It offers basic and secondary schooling. Uva College was the first school in Uva province, founded in 1867 by the Ceylon Diocesan Mission. It is located in the center of Badulla. The college began with two halls and two dorms, as well as a science laboratory. The principal's quarters were adjacent to the office. The school educates around 3000 primary and intermediate pupils. It is separated into two groups administratively: primary (grades 1–5) and secondary (grades 6–13).</p>
                            <a class="btn btn-primary" href="http://www.facebook.com/uvacollegeB">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="welcome-image">
                        <img src="images/wellcome-image.jpg" class="algin-right" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Welcome Section -->

    <!-- Start: Facts Counter -->
    <div class="layout-v2-counter">
        <div class="facts-counter">
            <div class="container">
                <div class="row">
                    <ul>
                        <li class="color-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>Books<strong class="fact-counter">{{$bookcount}}</strong></span>
                            </div>
                        </li>
                        <li class="color-light-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="ebook"></i>
                                </div>
                                <span>EBooks<strong class="fact-counter">{{$ebookcount}}</strong></span>
                            </div>
                        </li>
                        {{-- <li class="color-green">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="eaudio"></i>
                                </div>
                                <span>eAudio<strong class="fact-counter">250</strong></span>
                            </div>
                        </li> --}}
                        <li class="color-red">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="magazine"></i>
                                </div>
                                <span>Magazine<strong class="fact-counter">0</strong></span>
                            </div>
                        </li>
                        {{-- <li class="color-blue">
                            <div class="fact-item">
                                <div class="fact-icon">
                                    <i class="videos"></i>
                                </div>
                                <span>DVDs<strong class="fact-counter">50</strong></span>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Facts Counter -->

    <!-- Start: Meet Staff -->
    <section class="team section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Staff</h2>
                <span class="underline center"></span>
                <p class="lead"></p>
            </div>
            <div class="team-list">
                <div class="team-member">
                    <figure>
                        <img src="images/staff/principle.jpg" alt="team" />
                    </figure>
                    <div class="content-block">
                        <div class="member-info">
                            <h4>Mr. D. K. M. Jayathissa</h4>
                            <span class="designation">principal</span>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <figure>
                        <img src="images/staff/staff1.jpg" alt="team" />
                    </figure>
                    <div class="content-block">
                        <div class="member-info">
                            <h4>Kamal Liyanage</h4>
                            <span class="designation">Librarian</span>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <figure>
                        <img src="images/staff/staff2.jpg" alt="team" />
                    </figure>
                    <div class="content-block">
                        <div class="member-info">
                            <h4>A.M.Amal Kumara</h4>
                            <span class="designation">Librarian</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Meet Staff -->

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

    <script>
        if ({{!Auth::check()}}) {
            document.getElementById("user-req").style.display = "none";
        }
        
    </script>
</body>
</html>