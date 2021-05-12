{{-- @extends('layouts.pagelayout')
@section('content')

{{-- background image --}}
<x-pagelayout>

<header></header> 

{{-- posts --}}
<div class="container">
    <h1 class="mt-3">All Posts</h1>
    <div class="row">

      
      @foreach ($posts as $post)
      <div class="col-md-4 mt-3">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          {{-- <img
            src="https://mdbootstrap.com/img/new/standard/nature/111.jpg"
            class="img-fluid"
          /> --}}
          <img class="card-img-top" src="{{asset('images/posts/'.$post->image)}}" alt="" >
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">{{$post->title}}</h4><p>(posted by {{$post->user->name}})</p>
          <a href="{{url('/posts',$post->id)}}" class="btn btn-primary">See More..</a>  
        </div>
      </div>
      </div>

      
         @endforeach

       

       
    </div>
    
</div>

</x-pagelayout>