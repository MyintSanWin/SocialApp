{{-- @extends('layouts.pagelayout')
@section('content') --}}
<x-pagelayout>
<div class="container-fluid">
<h1 class="mt-4">Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- map here -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.4874355668!2d95.9013773228136!3d16.838952489748188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2z4YCb4YCU4YC64YCA4YCv4YCU4YC6!5e0!3m2!1smy!2smm!4v1616382250894!5m2!1smy!2smm" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6">
            <form action="{{route('post_contact_message')}}" method="post">
            @csrf
                <p class="text-center text-primary ">Contact Us</p>

                <!-- userName -->
                <input type="text" id="form1Example2" name="username" class="form-control mt-4 mb-4" placeholder="UserName" />
                    @error('username')
                    <p class="text-danger">{{$message}} </p>

                     @enderror
          
                <!-- Email input -->

                  <input type="email" name="email" id="form1Example1" class="form-control mt-4 mb-4" placeholder="Email" />
                        @error('email')
                        <p class="text-danger">{{$message}} </p>

                        @enderror 
              <!-- message -->
                <textarea name="message" id="" cols="30" rows="10" class="form-control mt-4 mb-4" placeholder="your message">
                
               

                
                </textarea>
                 @error('message')
                <p class="text-danger">{{$message}} </p>

                @enderror
              
              
                
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">send message</button>
              </form>
        </div>
    </div>

</div>

{{-- @endsection --}}
</x-pagelayout>