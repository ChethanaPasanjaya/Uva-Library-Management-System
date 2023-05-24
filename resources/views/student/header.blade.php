<?php $notifications = DB::table('notifications')->get();?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('dist/img/logo.png') }}" alt="AdminSchoolLogo" height="90" width="90">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 1, 168));">

    <!-- top navbar left side links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/admin" class="nav-link">Home</a>
        </li>
        
    </ul>

    <!-- top navbar right side links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <?php $count = DB::table('notifications')->where('memberid', Auth::user()->memberid)->where('read', 0)->get();?>
            <a class="nav-link" data-toggle="dropdown" href="">
                <i class="far fa-bell"></i>
                @if ($count->count() != 0)
                    <span class="badge badge-warning navbar-badge">{{$count->count()}}</span>
                @endif
            </a>
            <!--notification dropdown list-->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="">
                
                @foreach($count as $item)
                    @if( Auth::user()->memberid == $item->memberid)
                        <p class="dropdown-item">
                            <!-- notification view Start -->
                            <div class="media" style="cursor: pointer;">
                                <div class="media-body" style="margin: 10px;">
                                    <div class="row">
                                        <h3 class="dropdown-item-title">User</h3>
                                    </div>
                                    <p class="text-sm">{{$item->notification}}</p>
                                </div>
                            </div>
                            <!-- notification view End -->
                            <div class="dropdown-divider"></div>
                        </p>
                    @endif
                @endforeach
                <div class="dropdown-item">
                    <div class="dropdown-divider"></div>
                    <div class="media-body" style="margin: 10px;" data-toggle="modal" data-target="#demoModal">
                        All notifications
                    </div>
                </div>
            </div>
        </li>
        <!-- Full screen view -->
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav><!--End top nav-->
@include('notification')

@if (Auth::user()->is_admin == 1)
    @include('admin/pages/adminProfile')
@endif