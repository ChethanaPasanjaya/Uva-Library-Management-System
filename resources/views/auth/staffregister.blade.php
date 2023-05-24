@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=" background-image: linear-gradient(rgb(36, 36, 36), rgb(4, 0, 224));">
                    <img src="{{asset('dist/img/schoolLogo.png')}}" alt="School Logo" height="50px">
                </div>

                <div class="card-body">
                    <h3 class="mb-5 text-uppercase">Staff registration form</h3>

                <form action="{{route('register-staffuser')}}" method="POST">

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
                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
