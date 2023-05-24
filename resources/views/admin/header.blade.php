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
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- top navbar right side links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>
        
        <!-- Messages -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">1</span><!--new messages count here-->
            </a>
            <!--messages dropdown list-->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message view Start -->
                    <div class="media">
                        <img src="{{ asset('dist/img/avatar5.png') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Student/user name display here
                            </h3>
                            <p class="text-sm">Message display here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> Message time display here</p>
                        </div>
                    </div>
                    <!-- Message view End -->
                    <div class="dropdown-divider"></div>
                </a>
            </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">1</span>
            </a>
            <!--notification dropdown list-->
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- notification view Start -->
                    <div class="media">
                        <img src="{{ asset('dist/img/avatar5.png')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Student/user name display here
                            </h3>
                            <p class="text-sm">Notification details display here</p>
                        </div>
                    </div>
                    <!-- notification view End -->
                    <div class="dropdown-divider"></div>
                </a>
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
