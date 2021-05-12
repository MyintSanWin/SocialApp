{{-- @extends('layouts.pagelayout')
@section('content') --}}
<x-pagelayout>
<div class="container mt-5 " >
    
    <p class="mt-3 text-secondary" style="font-size:large">{{$post->title}}</p>
   <img src="{{asset('images/posts/'.$post->image)}}" alt="" width="1000px" height="500px"  class="mr-3 ml-26 display-flex"> 
    <p class="mt-3 justify-content-center" style="flex-wrap: wrap;"  >
        {{$post->content}}
    </p>
    <div class="text-center ">
    <a href="{{route('editPost',$post->id)}}" class="btn btn-success mr-5" >Edit</a>
    <a href="{{route('deletePost',$post->id)}}" class="btn btn-danger ml-5">Delete</a>
    </div>

</div>
</x-pagelayout>
{{-- @endsection --}}