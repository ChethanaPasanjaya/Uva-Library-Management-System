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
                                    <li class="active"><a href="/contact">Contact</a></li>
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
                                <li class="active"><a href="/contact">Contact</a></li>
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
                <h2>Contact Us</h2>
                <span class="underline center"></span>
                <p class="lead">Feel free to contact us...</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
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
                            <div class="contact-location">
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>Mahiyangana Road</li>
                                                <li>Badulla Sri Lanka</li>
                                                <li>PO Box 90000</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li>Mahiyangana Road</li>
                                                <li>Badulla Sri Lanka</li>
                                                <li>PO Box 90000</li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: 055-123 4567</a></li>
                                                {{-- <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li> --}}
                                                {{-- <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: 055-123 4567</a></li>
                                                {{-- <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li> --}}
                                                {{-- <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>www.uvalms.com</li>
                                                <li>uvacollage@gmail.com</li>
                                                {{-- <li>info@libraria.com</li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="http://www.libraria.com/">www.uvalms.com </a></li>
                                                <li><a href="">uvacollage@gmail.com</a></li>
                                                <li><a href="mailto:info@libraria.com">info@libraria.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>                                                
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="contact-area">
                                    <div class="container">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.154669776821!2d81.05501126475852!3d6.991056494949714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae462147255090f%3A0x23403425f6cdb8a1!2sUva%20College%2C%20Uva%20College%20Rd%2C%20Badulla%2090000!5e0!3m2!1sen!2slk!4v1650216523001!5m2!1sen!2slk" width="100%" height="535" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>Send us a message</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form id="ContactForm">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text" placeholder="First Name" name="firstname" id="fname" size="30" value="" aria-required="true" required />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text" placeholder="Last Name" name="lastname" id="lname" size="30" value="" aria-required="true" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Email" name="email" id="email" size="30" value="" aria-required="true" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text" placeholder="Phone Number" name="phone" id="phone" size="30" value="" aria-required="true" required/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" placeholder="Your message" name="message" id="message" aria-required="true" required></textarea>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            {{-- <input class="btn btn-default" id="submit-contact" type="submit" name="submit" value="Send Message"  /> --}}
                                                                            <button type="submit">SEND MESSAGE</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form> 
                                                            <div id="success-msg" style="display: none;">
                                                                <span style="color: rgb(0, 193, 0);">Your message was sent successfully! Our team will contact you soon.</span>
                                                            </div>

                                                            <div id="fail-msg" style="display: none;">
                                                                <span style="color: rgb(193, 0, 0);">Something went wrong, try refreshing and submitting the form again.</span>
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
                </div>
            </main>
        </div>
    </div>
    <!-- End: Contact Us Section -->

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
        $('#ContactForm').on('submit',function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.

            $.ajax({
                type: 'POST',
                url: '{{route("contact.us")}}',
                data: {
                    "_token": "{{csrf_token()}}",
                    firstname: $('#fname').val(),
                    lastname: $('#lname').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    message: $('#message').val()
                },
                success: function(response) {
                    if(response.success) {
                        $('#success-msg').show();
                        document.getElementById("ContactForm").reset(); 
                    } else {
                        $('#fail-msg').show();
                    }
                },
            });
        });
    </script>
    
</body>
</html>