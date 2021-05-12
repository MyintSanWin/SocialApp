{{-- @extends('layouts.pagelayout')
@section('content') --}}
<x-pagelayout>
<div class="container">
    <h1 class="mt-4 mb-4 ">Edit Post</h1>
    <form class=" border border-light p-5 " action="{{route('updatePost',$update_data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
        
            <label for="" class="text-primary">Title</label>
          <input type="text" id="form1Example1" value="{{$update_data->title}}" name="title" class="form-control mb-4" />
         
            <label for="" class="text-primary">Photo</label>
          <input type="file" name="image" id="form1Example2" class="form-control mb-4" />
          <img src="{{asset('images/posts/'.$update_data->image)}}" width="300px" height="300px" alt=""><br><br>
          <label for="" class="text-primary">Content</label>
          <textarea name="content" id="" cols="30" rows="10" class="form-control mb-4" >
              {{$update_data->content}}
          </textarea>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block"> Update Post</button>
      </form>
</div>

</x-pagelayout>
{{-- @endsection --}}