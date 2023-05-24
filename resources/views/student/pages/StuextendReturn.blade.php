<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student | Extend Return Date</title>

  <!--favicon icons-->
  <link rel="shortcut icon" href="favicon/icon.png" type="image/x-icon" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <style>
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 30px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }
    
        .closebtn:hover {
        color: black;
        }
  </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- include header  --}}
        @include('student/header')


        
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-success elevation-4" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
            <!-- School Logo -->
            <a href="/" class="brand-link">
                <img src="dist/img/schoolLogo.png" alt="School Logo" height="50px">
                <span class="brand-text font-weight-light"><B>Student</B></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel-->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('icons/user.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block mr-3" style="float: left;">{{ Auth::user()->firstname }}</a>
                        <a class="btn btn-danger btn-sm" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('user.profile', Auth::user()->memberid)}}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   My Profile
                                </p>
                            </a>
                        </li>

                        <!--Books-->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Book Details
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/Stu-borrow-Detail" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Borrow Details</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/Stu-extend-Return" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Extend Return Date</p>
                                </a>
                            </li>
                            </ul>
                        </li>

                        <!--Fines-->
                        <li class="nav-item">
                            <a href="/Stu-fine-Details" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   Fine Details
                                </p>
                            </a>
                        </li>
                        
                    </ul>                    
                </nav>
            </div><!--end Sidebar -->

        </aside><!-- End of Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Extend Return Date </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Extend Return Date</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                @if(Session::has('success'))
                    <div class="alert alert-success" id="alert">
                        <p>
                            {{ Session::get('success') }}
                            <span class="closebtn" onclick="document.getElementById('alert').style.display='none';">&times;</span> 
                        </p>
                    </div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert alert-danger" id="alert">
                        <p>
                            {{ Session::get('fail') }}
                            <span class="closebtn" onclick="document.getElementById('alert').style.display='none';">&times;</span> 
                        </p>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Extend Return Date Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Book ID</th>
                                            <th>Book Name</th>
                                            <th>Borrow Date</th>
                                            <th>Return Date</th>
                                            <th>Ex. Return Date</th>
                                            <th>status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($extends_books as $row)
                                        <tr>
                                            <td>{{$row['Book_Id']}}</td>
                                            <td>{{$row['Book_Name']}}</td>
                                            <td>{{$row['Borrow_Date']}}</td>
                                            <td>{{$row['Return_Date']}}</td>
                                            @if($row['status']=='3')
                                                <td>{{$row['New_Return_Date']}}</td>
                                            @else
                                                <td>0000-00-00</td>   
                                            @endif    
                                            @if($row['status'] == '2')
                                                <td style="color: blue">Requested</td>
                                            @elseif($row['status'] == '3')
                                                <td style="color: gold;">New Date Added</td>
                                            @elseif($row['status'] == '1')
                                                <td style="color: red">Not Requested</td>
                                            @else
                                                <td style="color: green;">Book Returned</td>
                                            @endif
                                            @if($row['status'] == '1')
                                                <td><a href="Asking-Extend-Return-Date/{{$row['id']}}" class="btn btn-danger">Extend Return Date</a> </td>
                                            @else
                                                <td><button class="btn btn-danger" disabled>Extend Return Date</button> </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
       

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        {{-- include footer  --}}
        @include('student/footer')
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    
    <!-- Uva App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- Table control script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
</body>
</html>
