{{-- @extends('layouts.authlayout')
@section('content') --}}
<x-authlayout>
<div class="container">
    <div class="col md-4 d-flex justify-content-center mt-5">
        <form action="{{route('post_login')}}" method="post">
        @csrf
            <div class="h4 mb-4 pink-text  d-flex  justify-content-center">Sign In</div>
            @if(session("error"))
            <div class="alert alert-danger">
              {{session("error")}}
            </div>
            @endif
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" name="email" class="form-control" />
              @error('email')
                <p class="text-danger">{{$message}}</p>
              @enderror
              <label class="form-label" for="form2Example1">Email address</label>
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form2Example2" class="form-control" />
              @error('password')
                <p class="text-danger">{{$message}}</p>
              @enderror
              <label class="form-label" for="form2Example2">Password</label>
            </div>
          
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              
              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary blue-text btn-block mb-4">Sign in</button>
          
            <!-- Register buttons -->
            <div class="text-center">
              <p>Not a member? <a href="{{route('register')}}">Register</a></p>
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
