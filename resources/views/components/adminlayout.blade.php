<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
{{-- styl css --}}
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>
{{-- navigation --}}

{{-- <x-navbar/> --}}
<x-navbar></x-navbar>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4  " style="background-color:gray;">
            <ul class="list-group mt-5 ">
                <li class="list-group-item"><a href="{{route('admin.manage_premium_users')}}">Manage Premium User</a></li>
                <li class="list-group-item"><a href="{{route('admin.contact_messages')}}">Contact Message</a></li>
                
              </ul>
        </div>
        <div class="col-md-8">
            {{-- @yield('content') --}}

            {{$slot}}

        </div>
       
    </div>  
</div>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



<script>
@if(session("message"))
let message="{{session("message")}}";

toastr.success(message);

@endif

</script>

</body>
</html>