{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
                    <a href="/"><img src="{{asset('dist/img/schoolLogo.png')}}" alt="School Logo" height="50px"></a>
                </div>

                <div class="card-body">
                    <h3 class="mb-5 text-uppercase">Student registration form</h3>
                    <form action="{{route('register-user')}}" method="POST">
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                        @csrf



                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n">First Name</label>
                            <input type="text" class="form-control" placeholder="" name="firstname" value="{{old('firstname')}}">
                            <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                            </div>
                            </div>

                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1n">Last name</label>
                                <input type="text" class="form-control" placeholder="" name="lastname" value="{{old('lastname')}}">
                                <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                            </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                            <label class="form-label" for="form3Example1m1">Guardians name</label>
                            <input type="text" class="form-control" placeholder="" name="guardiansname" value="{{old('guardiansname')}}">
                            <span class="text-danger">@error('guardiansname') {{$message}} @enderror</span>
                            </div>
                            </div>


                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1n1">Gu. Phone no.</label>
                                <input type="text" class="form-control" placeholder="" name="guardianphone" value="{{old('guardianphone')}}">
                                <span class="text-danger">@error('guardianphone') {{$message}} @enderror</span>
                            </div>
                            </div>
                        </div>
        
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example8">Address</label>
                        <input type="text" class="form-control" placeholder="" name="address" value="{{old('address')}}">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                        </div>

                        
                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
        
                            <h6 class="mb-0 me-4">Gender: </h6>
        
                            <div class="form-check form-check-inline mb-0 me-4">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="gender"
                                id="femaleGender"
                                value="Female"
                            />
                            <label class="form-check-label" for="femaleGender">Female</label>
                            </div>
        
                            


                            <div class="form-check form-check-inline mb-0 me-4">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="gender"
                                id="maleGender"
                                value="Male"
                            />
                            <label class="form-check-label" for="maleGender">Male</label>
                            </div>
        
                            <div class="form-check form-check-inline mb-0">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="gender"
                                id="otherGender"
                                value="Other"
                            />
                            <label class="form-check-label" for="otherGender">Other</label>
                            
                            
                            </div>
                            <span class="text-danger">@error('gender') {{$message}} @enderror</span>
        
                        </div>


                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example9">DOB</label>
                            <input class="form-control" id="date" name="dob" value="{{old('dob')}}" placeholder="YYY-MM-DD" type="date"/>
                            <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="grade"> Grade</label>
                                <select name="grade" class="form-select form-control" size="2" aria-label="size 2 select example" required>
                                    <option value="6">Grade 6</option>
                                    <option value="6">Grade 7</option>
                                    <option value="6">Grade 8</option>
                                    <option value="6">Grade 9</option>
                                    <option value="6">Grade 10</option>
                                    <option value="6">Grade 11</option>
                                    <option value="6">Grade 12</option>
                                    <option value="6">Grade 13</option>
                                </select>
                                <span class="text-danger">@error('grade') {{$message}} @enderror</span>
                            </div>
                            </div>
                            <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="class">Class</label>
                                <select name="class" class="form-select form-control" size="2" aria-label="size 2 select example" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                </select>
                                <span class="text-danger">@error('class') {{$message}} @enderror</span>
                            </div>
                            </div>
                        </div>
        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example90">Phone number</label>
                            <input type="text" class="form-control" placeholder="" name="phonenumber" value="{{old('phonenumber')}}">
                            <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                        </div>




                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example90">Email</label>
                            <input type="text" class="form-control" placeholder="" name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example90">Password</label>
                            <input type="password" class="form-control" placeholder="" name="password" value="">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="d-flex justify-content-end pt-3">
                            <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                            <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
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
                <h2>Registration</h2>
                <span class="underline center"></span>
                <p class="lead">Welcome to Uva Library.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>Registration</li>
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
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-3"></div>
                                    <button class="btn btn-info" onclick="
                                        document.getElementById('student-reg').style.display='';
                                        document.getElementById('staff-reg').style.display='none';
                                    ">Student Registration</button>
                                    <button class="btn btn-dark" onclick="
                                        document.getElementById('student-reg').style.display='none';
                                        document.getElementById('staff-reg').style.display='';
                                    ">Staff Registration</button>

                                <div class="contact-area">
                                    <div class="container" id="student-reg">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <img src="{{asset('images/register-image.jpg')}}" alt="School Logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>Student Registration</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form action="{{route('register-user')}}" method="POST">
                                                                @if(Session::has('success'))
                                                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                                                @endif
                                                                @if(Session::has('fail'))
                                                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                                                @endif
                                                                @csrf
                                        
                                        
                                                                <div class="form-outline mb-4">
                                                                    <label class="form-label" for="form3Example8">Index Number</label>
                                                                    <input type="text" class="form-control" placeholder="" name="index" value="{{old('index')}}">
                                                                    <span class="text-danger">@error('index') {{$message}} @enderror</span>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                    <label class="form-label" for="form3Example1n">First Name</label>
                                                                    <input type="text" class="form-control" placeholder="" name="firstname" value="{{old('firstname')}}">
                                                                    <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                                                                    </div>
                                                                    </div>
                                        
                                                                    <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                                        <input type="text" class="form-control" placeholder="" name="lastname" value="{{old('lastname')}}">
                                                                        <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                        
                                        
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                    <label class="form-label" for="form3Example1m1">Guardians name</label>
                                                                    <input type="text" class="form-control" placeholder="" name="guardiansname" value="{{old('guardiansname')}}">
                                                                    <span class="text-danger">@error('guardiansname') {{$message}} @enderror</span>
                                                                    </div>
                                                                    </div>
                                        
                                        
                                                                    <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                        <label class="form-label" for="form3Example1n1">Guardians Phone no.</label>
                                                                        <input type="text" class="form-control" placeholder="" name="guardianphone" value="{{old('guardianphone')}}">
                                                                        <span class="text-danger">@error('guardianphone') {{$message}} @enderror</span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                
                                                                <div class="form-outline mb-4">
                                                                <label class="form-label" for="form3Example8">Address</label>
                                                                <input type="text" class="form-control" placeholder="" name="address" value="{{old('address')}}">
                                                                <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                                                </div>
                                        
                                                                
                                                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                                
                                                                    <h6 class="mb-0 me-4">Gender: </h6>
                                                
                                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="gender"
                                                                        id="femaleGender"
                                                                        value="Female"
                                                                    />
                                                                    <label class="form-check-label" for="femaleGender">Female</label>
                                                                    </div>
                                                
                                                                    
                                        
                                        
                                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="gender"
                                                                        id="maleGender"
                                                                        value="Male"
                                                                    />
                                                                    <label class="form-check-label" for="maleGender">Male</label>
                                                                    </div>
                                                                    <span class="text-danger">@error('gender') {{$message}} @enderror</span>
                                                
                                                                </div>
                                        
                                        
                                                                <div class="form-outline mb-4">
                                                                    <label class="form-label" for="form3Example9">DOB</label>
                                                                    <input class="form-control" id="date" name="dob" value="{{old('dob')}}" placeholder="YYY-MM-DD" type="date"/>
                                                                    <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                                                </div>
                                        
                                                                <div class="row">
                                                                    <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                        <label class="form-label" for="grade"> Grade</label>
                                                                        {{-- <input type="text" class="form-control" placeholder="" name="grade" value="{{old('grade')}}"> --}}
                                                                        <select name="grade" class="form-select form-control" size="2" aria-label="size 2 select example" required>
                                                                            <option value="6">Grade 6</option>
                                                                            <option value="6">Grade 7</option>
                                                                            <option value="6">Grade 8</option>
                                                                            <option value="6">Grade 9</option>
                                                                            <option value="6">Grade 10</option>
                                                                            <option value="6">Grade 11</option>
                                                                            <option value="6">Grade 12</option>
                                                                            <option value="6">Grade 13</option>
                                                                        </select>
                                                                        <span class="text-danger">@error('grade') {{$message}} @enderror</span>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-4">
                                                                    <div class="form-outline">
                                                                        <label class="form-label" for="class">Class</label>
                                                                        {{-- <input type="text" class="form-control" placeholder="" name="class" value="{{old('class')}}"> --}}
                                                                        <select name="class" class="form-select form-control" size="2" aria-label="size 2 select example" required>
                                                                            <option value="A">A</option>
                                                                            <option value="B">B</option>
                                                                            <option value="C">C</option>
                                                                            <option value="D">D</option>
                                                                            <option value="E">E</option>
                                                                            <option value="F">F</option>
                                                                            <option value="G">G</option>
                                                                            <option value="H">H</option>
                                                                        </select>
                                                                        <span class="text-danger">@error('class') {{$message}} @enderror</span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                
                                                                <div class="form-outline mb-4">
                                                                    <label class="form-label" for="form3Example90">Phone number</label>
                                                                    <input type="text" class="form-control" placeholder="" name="phonenumber" value="{{old('phonenumber')}}">
                                                                    <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                                                                </div>
                                        
                                        
                                        
                                        
                                                                <div class="form-outline mb-4">
                                                                <label class="form-label" for="form3Example90">Email</label>
                                                                    <input type="text" class="form-control" placeholder="" name="email" value="{{old('email')}}">
                                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                                </div>
                                        
                                                                <div class="form-outline mb-4">
                                                                <label class="form-label" for="form3Example90">Password</label>
                                                                    <input type="password" class="form-control" placeholder="" name="password" value="">
                                                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                                </div>
                                                                <div class="d-flex justify-content-end pt-3">
                                                                    <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                                                    <button type="submit" class="btn btn-success btn-lg ms-2">Submit form</button>
                                                                </div>
                                                            </form>
                                                        </div>                                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container" id="staff-reg" style="display: none;">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <img src="{{asset('images/registerstaff-image.jpg')}}" alt="School Logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>staff Registration</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form action="{{route('register-staffuser')}}" method="POST">

                                                                @if(Session::has('success'))
                                                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                                                @endif
                                                                @if(Session::has('fail'))
                                                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                                                @endif
                                                        @csrf
                                    
                                    
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label" for="form3Example8">Index Number</label>
                                                            <input type="text" class="form-control" placeholder="TExxx" name="index" value="{{old('index')}}">
                                                            <span class="text-danger">@error('index') {{$message}} @enderror</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                              <div class="form-outline">
                                                              <label class="form-label" for="form3Example1n">First Name</label>
                                                              <input type="text" class="form-control" placeholder="" name="firstname" value="{{old('firstname')}}">
                                                               <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                                                              </div>
                                                            </div>
                                    
                                                            <div class="col-md-6 mb-4">
                                                              <div class="form-outline">
                                                              <label class="form-label" for="form3Example1n">Last name</label>
                                                                <input type="text" class="form-control" placeholder="" name="lastname" value="{{old('lastname')}}">
                                                                <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                                                              </div>
                                                            </div>
                                                        </div>
                                    
                                          
                                                          <div class="form-outline mb-4">
                                                          <label class="form-label" for="form3Example8">Address</label>
                                                          <input type="text" class="form-control" placeholder="" name="address" value="{{old('address')}}">
                                                          <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                                          </div>
                                    
                                                        
                                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                          
                                                            <h6 class="mb-0 me-4">Gender: </h6>
                                          
                                                            <div class="form-check form-check-inline mb-0 me-4">
                                                              <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="gender"
                                                                id="femaleGender"
                                                                value="Female"
                                                              />
                                                              <label class="form-check-label" for="femaleGender">Female</label>
                                                            </div>
                                          
                                                            
                                    
                                    
                                                            <div class="form-check form-check-inline mb-0 me-4">
                                                              <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="gender"
                                                                id="maleGender"
                                                                value="Male"
                                                              />
                                                              <label class="form-check-label" for="maleGender">Male</label>
                                                            </div>
                                          
                                                           
                                                            <span class="text-danger">@error('gender') {{$message}} @enderror</span>
                                          
                                                          </div>
                                    
                                    
                                    
                                                        <div class="form-outline mb-4">
                                                            <label class="form-label" for="form3Example9">DOB</label>
                                                            <input type="date" class="form-control" placeholder="YYYY-MM-DD" name="dob" value="{{old('dob')}}">
                                                            <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                                          </div>
                                    
                                                          
                                          
                                                          <div class="form-outline mb-4">
                                                            <label class="form-label" for="form3Example90">Phone number</label>
                                                            <input type="text" class="form-control" placeholder="" name="phonenumber" value="{{old('phonenumber')}}">
                                                            <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                                                          </div>
                                    
                                    
                                    
                                    
                                                          <div class="form-outline mb-4">
                                                          <label class="form-label" for="form3Example90">Email</label>
                                                            <input type="text" class="form-control" placeholder="" name="email" value="{{old('email')}}">
                                                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                        </div>
                                    
                                                        <div class="form-outline mb-4">
                                                        <label class="form-label" for="form3Example90">Password</label>
                                                            <input type="password" class="form-control" placeholder="" name="password" value="">
                                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                        </div>
                                                        <div class="d-flex justify-content-end pt-3">
                                                            <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                                                            <button type="submit" class="btn btn-success btn-lg ms-2">Submit form</button>
                                                          </div>
                                                    </form>
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
</body>
</html>
