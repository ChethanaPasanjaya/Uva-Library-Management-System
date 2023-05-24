<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | UvaLMS</title>

    {{-- include styles --}}
    @include('admin.plugins.style')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- include header  --}}
        @include('admin/header')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-success elevation-4" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
            <!-- School Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/schoolLogo.png" alt="School Logo" height="50px">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel-->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/profile" class="d-block">Mis. Perera</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/admin" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <!--user-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Users
                                    <i class="right fa-solid fa-angles-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/userDetails" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User Details</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/addUser" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add new user</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Books
                                    <i class="right fa-solid fa-angles-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/addBook" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Books</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/listed-Books" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Books</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/damaged-Books" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Damage Books</p>
                                </a>
                            </li>
                            </ul>
                        </li>

                        <!--Issue books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-book-bookmark"></i>
                                <p>
                                    Issue books
                                    <i class="right fa-solid fa-angles-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/issueNewBook" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Issue new Book</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/issued-Books" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage issued Books</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/borrow-req-Books" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage borrow requests</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Categories-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Categories
                                    <i class="right fa-solid fa-angles-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/addCategory" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/listedCategories" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage categories</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Authors-->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Authors
                                    <i class="right fa-solid fa-angles-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/addAuthor" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add new author</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/listedAuthors" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage authors</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>                    
                </nav>
            </div><!--end Sidebar -->
        </aside><!-- End of Main Sidebar Container -->

        {{-- page top content --}}
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Admin Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            {{-- Main body content --}}
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box" style="background-color:lawngreen;">
                                <div class="inner">
                                    <h3>8000</h3> <!---------------------------------------------------------->
                                    <p>Listed Books</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <a href="/listed-Books" class="small-box-footer" style="color: black;">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>50</h3><!---------------------------------------------------------->
                                    <p>Books not return yet</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>2000</h3><!---------------------------------------------------------->
                                    <p>Registered Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>

                        <!--col-->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3><!---------------------------------------------------------->
                                    <p>Author List</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-user-pen"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div><!--small-box bg-info-->
                        </div>
                    </div> <!--1st row-->

                    <!-- 2 nd row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-6 connectedSortable">
                            
                            <!-- TABLE: book borrow request -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <i class="fa-solid fa-book ml-3"></i>
                                    <h3 class="card-title"><b>Book borrow requests </b></h3>
                    
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table id="example1" class="table m-0 table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Student ID</th>
                                                    <th>Book ID</th>
                                                    <th>Book Name</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">ST ID here</a></td>
                                                    <td>Book ID here</td>
                                                    <td>Book name here</td>
                                                    <td>
                                                        <button class="btn btn-success">Confirm</button>
                                                        <button class="btn btn-danger">Disline</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">ST ID here</a></td>
                                                    <td>Book ID here</td>
                                                    <td>Book name here</td>
                                                    <td>
                                                        <button class="btn btn-success">Confirm</button>
                                                        <button class="btn btn-danger">Disline</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="/borrow-req-Books" class="btn btn-sm float-right" style="background-color: orange;">View All Requests</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>

                        </section><!-- Left col end-->
                        <!-- right col -->
                        <section class="col-lg-6 connectedSortable">
                            
                            <!-- TABLE: book borrow request -->
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <i class="fa-solid fa-user ml-3"></i>
                                    <h3 class="card-title"><b>User register requests</b></h3>
                    
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table id="example1" class="table m-0 table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Student Index</th>
                                                    <th>Student Name</th>
                                                    <th>Grade & class</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href=""> ST Index here</a></td>
                                                    <td>student name</td>
                                                    <td>student Grade here</td>
                                                    <td>
                                                        <button class="btn btn-success">Confirm</button>
                                                        <button class="btn btn-danger">Disline</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href=""> ST Index here</a></td>
                                                    <td>student name</td>
                                                    <td>student Grade here</td>
                                                    <td>
                                                        <button class="btn btn-success">Confirm</button>
                                                        <button class="btn btn-danger">Disline</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <a href="/borrow-req-Books" class="btn btn-sm float-right" style="background-color: orange;">View All Requests</a>
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            
                        </section><!-- right col end-->
                    </div><!-- end 2 nd row -->

                    <!--3rd row-->
                    <div>
                        <!-- Calendar -->
                        <div class="card bg-gradient-success">
                            <div class="card-header border-0">
            
                                <h3 class="card-title">
                                    <i class="far fa-calendar-alt"></i>
                                    Time Table
                                </h3>
                                <!-- tools-->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <!-- /tools -->
                            </div>
                            <!-- /card-header -->
                            <div class="card-body pt-0"> 
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($times as $item)
                                        <tr>
                                            <td>{{ $item->time }}</td>
                                            <td>{{ $item->Monday }}</td>
                                            <td>{{ $item->Tuesday }}</td>
                                            <td>{{ $item->Wednesday }}</td>
                                            <td>{{ $item->Thursday }}</td>
                                            <td>{{ $item->Friday }}</td>
                                            <td>
                                                <a href="" class="btn btn-sm pl-3 pr-3" style="background-color:ivory;">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /card-body -->
                        </div>
                        <!-- /calender card -->

                    </div><!-- / 3rd row-->
                    
                </div><!--container-fluid-->
            </section><!--Main body content-->


        </div><!--content-wrapper-->

        {{-- include footer  --}}
        @include('admin/footer')
    </div><!--wrapper-->

    {{-- include styles --}}
    @include('admin.plugins.script')
    

</body>
</html>