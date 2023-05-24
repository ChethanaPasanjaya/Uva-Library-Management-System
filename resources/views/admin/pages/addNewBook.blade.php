<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | Add New Book | UvaLMS</title>

    {{-- include styles --}}
    @include('admin.plugins.style')


</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed">
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
                            <a href="/admin" class="nav-link ">
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
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Books
                                    <i class="right fa-solid fa-angles-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/addBook" class="nav-link active">
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
                            <a href="" class="nav-link">
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
                            <h1 class="m-0">Add New Book</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active">Add New Book</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                            @if (session('status'))
                                <h5 class="alert alert-success">{{ session('status') }}</h5>
                            @endif

                            <!--form-->
                            <div class="card card-success">
                                <div class="card-header">
                                  <h3 class="card-title">Add Book</h3>
                                </div>
                                <form method="POST" action="{{ route('book.add_newbook') }}">
                                    @csrf
                                  <div class="card-body">
                                    <p style="float:left;" class="mr-2">Last Registered Book ID:</p>
                                    <p style="color: red;">{{ $lastBookId }}</p>
                                    <div class="form-group">
                                      <label for="bookId">Book ID</label>
                                      <input type="text" name="bookid" class="form-control" id="bookId" placeholder="Enter book Id" required>
                                      <a href="javascript:void(0)" class="btn mt-2" style="background-color: gold" onclick="generate();"><i class="fa-solid fa-qrcode"></i> Generate</a>
                                    </div>
                                    <div class="form-group">
                                        <label for="bookName">Book Name</label>
                                        <input type="text" name="bookName" class="form-control" id="bookName" placeholder="Enter book Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="authorId">Book Description</label>
                                        <textarea name="book-desc" id="book-desc" cols="30" rows="5" class="form-control" placeholder="Enter Book Description" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="authorId">Author Name</label>
                                        <input type="text" name="authorName" class="form-control" id="authorId" placeholder="Enter author Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="authorId">Category</label>
                                        <select name="categoryId" class="form-select form-control" size="3" aria-label="size 3 select example" required>
                                            <option value="000" disabled="disabled">Book Categories</option>
                                            <option value="100">General Books | සාමාන්‍ය කෘති</option>
                                            <option value="200">Philosophy and Psychology | දර්ශනය සහ මනෝ විද්‍යාව</option>
                                            <option value="300">Religion | ආගම</option>
                                            <option value="400">Language | භාෂාව</option>
                                            <option value="500">Natural science and maths | ස්වාභාව විද්‍යාව සහ ගණිතය</option>
                                            <option value="600">Technology | තාක්ෂණ විද්‍යා</option>
                                            <option value="700">Art | කලා</option>
                                            <option value="800">Literature | සාහිත්‍ය</option>
                                            <option value="900">Geography | භූගෝල විද්‍යාව</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="authorId">Book image path: book-images/</label>
                                        <input type="text" name="bookImage" class="form-control" id="authorId" placeholder="Enter book image path (ex: categoryFolderName/image.jpg) " required>
                                    </div>
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Complete</label>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                  </div>
                                </form>
                            </div>
                            <!--end form-->

                        </div>
                        <div class="col-md-6">
                            <div class="jumbotron mx-auto w-75 border my-4 py-4 text-center" id="dBtn">
                                <div id="placeHolder"></div>
                                <div id="myCanvas"></div>
                                <br>
                                <a href="#" class="btn btn-warning btn-lg" onclick="downloadQrCode(this);" download="qr.png">Download</a>
                            </div>
                        </div>
                    </div><!--row-->
                </div><!--container-fluid-->
            </div><!--content-->

        </div><!--content-wrapper-->

        {{-- include footer  --}}
        @include('admin/footer')
    </div><!--wrapper-->

    {{-- include script --}}
    @include('admin.plugins.script')

</body>
</html>