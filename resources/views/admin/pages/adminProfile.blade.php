<div class="modal fade admin" id="admin-profile" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left; color: black">Admin Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php $admin = DB::table('admins')->where('admin_id', Auth::user()->memberid)->first(); 
            $name = explode(" ", $admin->name)?>
            <div class="modal-body">    
                <form action="{{route('admin.update.Profile')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="userid" class="col-sm-2 col-form-label" style="color: black;">Admin ID: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="admin_id" value="{{$admin->admin_id}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bookid" class="col-sm-2 col-form-label" style="color: black;">First Name: </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="fname" value="{{ $name[0] }}" required>
                        <span class="text-danger">@error('fname') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bookid" class="col-sm-2 col-form-label" style="color: black;">Last Name: </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="lname" value="{{ $name[1] }}" required>
                        <span class="text-danger">@error('lname') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-2 col-form-label" style="color: black;">Email: </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{ $admin->email}}" required>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-2 col-form-label" style="color: black;">Number: </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="number" value="{{ $admin->mobile}}" required>
                        <span class="text-danger">@error('number') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <hr>
                    <h6>Change password</h6>
                    <hr>
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-2 col-form-label" style="color: black;">New Password: </label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="pass" value="" >
                        <span class="text-danger">@error('pass') {{$message}} @enderror</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-2 col-form-label" style="color: black;">Confirm Password: </label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirm_pass" >
                        <span class="text-danger">@error('confirm_pass') {{$message}} @enderror</span>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-toggle="modal" data-target="#password-confrim" data-dismiss="modal">Update</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="password-confrim" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left; color: black">Password confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="book_name" class="col-sm-2 col-form-label" style="color: black;">Current Password: </label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="current_pass" value="" required>
                    <span class="text-danger">@error('current_pass') {{$message}} @enderror</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i>Confirm</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>