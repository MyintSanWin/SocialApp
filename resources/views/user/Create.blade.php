{{-- @extends('layouts.pagelayout')
@section('content') --}}
<x-pagelayout>
<div class="container">
    <h1 class="mt-4 mb-4 ">Create Post</h1>
    <form class=" border border-light p-5 " action="{{route('post')}}" method="post" enctype="multipart/form-data">
      @csrf
        
            <label for="">Title</label>
          <input type="text" id="form1Example1" name="title" class="form-control mb-4" />
         
            <label for="">Photo</label>
          <input type="file" name="image" id="form1Example2" class="form-control mb-4" />
        
          <label for="">Content</label>
          <textarea name="content" id="" cols="30" rows="10" class="form-control mb-4" ></textarea>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block"> Add Post</button>
      </form>
</div>
</x-pagelayout>

{{-- @endsection --}}