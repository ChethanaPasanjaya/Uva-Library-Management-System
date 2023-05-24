
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Panel | UvaLMS</title>

    <!--favicon icons-->
    <link rel="shortcut icon" href="{{asset('favicon/icon.png')}}" type="image/x-icon" />

    @include('admin.plugins.style')


</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('student/header')


          <!-- Main Sidebar Container -->
          <aside class="main-sidebar sidebar-dark-success elevation-4" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
            <!-- School Logo -->
            <a href="/" class="brand-link">
                <img src="{{asset('dist/img/schoolLogo.png')}}" alt="School Logo" height="50px">
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
                            <a href="{{route('user.profile', Auth::user()->memberid)}}" class="nav-link active">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                   My Profile
                                </p>
                            </a>
                        </li>

                        <!--Books-->
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
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
                                <a href="/Stu-extend-Return" class="nav-link">
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


        {{-- page top content --}}
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Student Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if(Session::has('success'))
                    <div class="alert success hide">
                        <span class="fas fa-check-circle"></span>
                        <span class="msg">Success: {{ Session::get('success') }}</span>
                        <div class="close-btn">
                        <span class="fas fa-times"></span>
                        </div>
                    </div>
                @endif
                @if(Session::has('fail'))
                    <div class="alert danger hide">
                        <span class="fas fa-exclamation-circle"></span>
                        <span class="msg">Fail: {{ Session::get('fail') }}</span>
                        <div class="close-btn">
                            <span class="fas fa-times"></span>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title"> My Profile</h3>
                            </div> 
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div> 
                                    <div class="col-md-6"> 
                                        <br><br>                               
                                        <img src ="{{asset('icons/user.png')}}" class="img-thumbnail" style="border:0px;"> 
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <br><br>
                                        <b>Name : </b><p class="font-italic">{{$st_data->First_Name}} {{$st_data->Last_Name}}</p>
                                        <b>Index :</b><p class="font-italic">{{$st_data->Stu_Id}}</p> <br>
                                        <a href="" data-target="#pwdModal" data-toggle="modal">Change My Password</a>
                                    </div>  
                                        
                                </div>
                            </div>
                        </div>
                        

                        
                    </div>
                    <div class="col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Student Details</h3>

                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php 
                                            if(isset($_GET['edit'])){
                                                $dis=""; 
                                            }else{
                                            $dis="disabled"; 
                                            }
                                            if(isset($_GET['done'])){
                                                $dis="disabled";  
                                            }else{
                                            //$dis="disabled"; 
                                            }
                                        ?>
                                            
                                           
                                        <form method="post" action="/SaveEditedData">
                                            {{csrf_field()}}
                                            <input type="hidden" name="sid" value="{{$st_data->Stu_Id}}" <?php echo $dis;?>>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" id="exampleFName" name="s_fname" value="{{$st_data->First_Name}}" <?php echo $dis;?> readonly>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Registration Number</label>
                                                <input type="text" class="form-control" id="exampleRegNo" name="s_rnumber" value="{{$st_data->Stu_Id}}" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Class</label>
                                                <input type="text" class="form-control" id="exampleClass" name="s_class" value="{{$st_data->Class}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date of Birth</label>
                                                <input type="date" class="form-control" id="exampleDOB" name="s_dob" value="{{$st_data->DOB}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Telephone Number</label>
                                                <input type="number" class="form-control" id="exampleTeleNo" name="s_tel" value="{{$st_data->TeleNum}}" <?php echo $dis;?>>
                                            </div>
                                           
                                    
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="text" class="form-control" id="exampleLName" name="s_lname" value="{{$st_data->Last_Name}}" <?php echo $dis;?> readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Grade</label>
                                                <input type="text" class="form-control" id="exampleGrade" name="s_grade" value="{{$st_data->Grade}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Gender</label>
                                                <input type="text" class="form-control" id="exampleGender" name="s_gender" value="{{$st_data->Gender}}" <?php echo $dis;?> readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text" class="form-control" id="exampleAdd" name="s_address" value="{{$st_data->Address}}" <?php echo $dis;?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email Address</label>
                                                <input type="email" class="form-control" id="exampleemail" name="s_email" value="{{$st_data->Email}}" disabled>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <br>
                                                <a href="/user/{{Auth::user()->memberid}}?edit=edit" class="btn btn-warning">Edit</a> 
                                                <input type="submit" class="btn btn-success" value="Save" name="save" > 
                                            </div>
                                        </form>    
                                    </div>
                                </div>
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>
        </div><!--content-wrapper-->

        <!--reset password-->
        <!--modal-->
        <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-12">
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="text-center">Change My Password?</h2> 
                </div>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="text-center">
                                
                                
                                    <div class="panel-body">
                                        <form method="post" action="{{route('student.change.password')}}">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder="Current Password" name="currentpwd" type="password">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder="New Password" name="newpwd" type="password">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control input-lg" placeholder="Re-type new Password" name="retypepwd" type="password">
                                            </div>
                                            <input class="btn btn-lg btn-primary btn-block" value="Update Password" type="submit">
                                            <button class="btn btn-lg btn-warning btn-block" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                        

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
        <!--reset password-->



        @include('admin/footer')
    </div><!--wrapper-->

   {{-- include styles --}}
   @include('admin.plugins.script')



</body>
</html>