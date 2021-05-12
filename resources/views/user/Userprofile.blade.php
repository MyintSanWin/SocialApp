{{-- @extends('layouts.pagelayout')
@section('content') --}}
<x-pagelayout>
<div class="container">
    <h1 class="mt-4 mb-4 ">User Profile</h1>
    <form class=" border border-light p-5 " action="{{route('post_userProfile')}}" method="post" enctype="multipart/form-data">
      @csrf
      @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-danger">
          {{session('error')}}
        </div>
        @endif
            <label for="">UserName</label>
          <input type="text" id="form1Example1" name="name" class="form-control mb-4" value="{{auth()->user()->name}}" />
         
          <label for="">Email</label>
          <input type="email" name="email" id="form1Example1" class="form-control mb-4" value="{{auth()->user()->email}}" />
         
            <label for="">Photo</label>
          <input type="file" name="image" id="form1Example2" class="form-control mb-4" />
          <img src="{{asset('images/profiles/'.auth()->user()->image)}}" width="300px" height="300px" alt=""><br>
         <label for="">Old Password</label>
          <input type="password" name="oldpassword" id="form1Example1" class="form-control mb-4" />
          <label for="">New Password</label>
          <input type="password" name="newpassword" id="form1Example1" class="form-control mb-4" />
         
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block"> Update Profile</button>
      </form>
</div>
</x-pagelayout>
{{-- @endsection --}}