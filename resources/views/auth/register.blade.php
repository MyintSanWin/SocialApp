{{-- @extends('layouts.authlayout')
@section('content') --}}
<x-authlayout>
<div class="container">
    <div class="col md-4 d-flex justify-content-center mt-5">
        <form action="{{route('post_register')}}"  method="post" enctype="multipart/form-data">
        @csrf
           
                <div class="h4 mb-4 pink-text d-flex justify-content-center">Sign Up</div>
            
                <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example3" name="username" class="form-control"  />
                <label class="form-label" for="form3Example3">Name</label>
                @error("username")
                <p class="text-danger">
                  {{$message}}
                </p>
                @enderror
            </div>
              
              
          
          
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
              @error("email")
                <p class="text-danger">
                  {{$message}}
                </p>
                @enderror
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" name="password" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
              @error("password")
                <p class="text-danger">
                  {{$message}}
                </p>
                @enderror
            </div>
          
            <div class="md-form">
              <p class="mb-3 text-info" >Select Your Profile Picutre</p>
              <input type="file" name="image" id="materialRegisterFormPassword " class="form-control" aria-describedby="materialRegisterFormPasswordHeLpBlock">
              @error("image")
                <p class="text-danger">
                  {{$message}}
                </p>
                @enderror
            </div>
            
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
            
            <p> <a href="{{route('login')}}">Already Registered?</a></p>
            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
          
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>
          
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
          
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
    </div>
</div>
</x-authlayout>
{{-- @endsection    --}}
