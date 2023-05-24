
<div class="modal fade" id="demoModal-student-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left; color: black">Edit User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin-st-update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">First Name</label>
                        <input type="text" class="form-control" placeholder="" name="firstname" value="{{$item->First_Name}}">
                        <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                        </div>
                        </div>

                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Last name</label>
                            <input type="text" class="form-control" placeholder="" name="lastname" value="{{$item->Last_Name}}">
                            <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                        </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1m1">Guardians name</label>
                        <input type="text" class="form-control" placeholder="" name="guardiansname" value="{{$item->guardName}}">
                        <span class="text-danger">@error('guardiansname') {{$message}} @enderror</span>
                        </div>
                        </div>


                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1n1">Phone no.</label>
                            <input type="text" class="form-control" placeholder="" name="guardianphone" value="{{$item->guardNo}}">
                            <span class="text-danger">@error('guardianphone') {{$message}} @enderror</span>
                        </div>
                        </div>
                    </div>
    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">Address</label>
                    <input type="text" class="form-control" placeholder="" name="address" value="{{$item->Address}}">
                    <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>

                    
                    {{-- <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
    
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
    
                    </div> --}}


                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example9">DOB</label>
                        <input class="form-control" id="date" name="dob" value="{{$item->DOB}}" placeholder="YYY-MM-DD" type="text"/>
                        <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="grade"> Grade</label>
                            <input type="text" class="form-control" placeholder="" name="grade" value="{{$item->Grade}}">
                            <span class="text-danger">@error('grade') {{$message}} @enderror</span>
                        </div>
                        </div>
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="class">Class</label>
                            <input type="text" class="form-control" placeholder="" name="class" value="{{$item->Class}}">
                            <span class="text-danger">@error('class') {{$message}} @enderror</span>
                        </div>
                        </div>
                    </div>
    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example90">Phone number</label>
                        <input type="text" class="form-control" placeholder="" name="phonenumber" value="{{$item->TeleNum}}">
                        <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example90">Password</label>
                        <input type="password" class="form-control" placeholder="" name="password" required>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Confirm</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="demoModal-staff-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 600px;">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel" style="float: left; color: black">Update User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin-st-update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">First Name</label>
                        <input type="text" class="form-control" placeholder="" name="firstname" value="{{$item->First_Name}}" >
                        <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                        </div>
                        </div>

                        <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="form3Example1n">Last name</label>
                            <input type="text" class="form-control" placeholder="" name="lastname" value="{{$item->Last_Name}}" >
                            <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                        </div>
                        </div>
                    </div>
    
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example8">Address</label>
                    <input type="text" class="form-control" placeholder="" name="address" value="{{$item->Address}}">
                    <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>

                    
                    {{-- <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
    
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
    
                    </div> --}}


                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example9">DOB</label>
                        <input class="form-control" id="date" name="dob" value="{{$item->DOB}}" placeholder="YYY-MM-DD" type="text"/>
                        <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                    </div>
    
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example90">Phone number</label>
                        <input type="text" class="form-control" placeholder="" name="phonenumber" value="{{$item->TeleNum}}">
                        <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example90">Password</label>
                        <input type="password" class="form-control" placeholder="" name="password" required>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Confirm</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
                </form>
        </div>
    </div>
</div>