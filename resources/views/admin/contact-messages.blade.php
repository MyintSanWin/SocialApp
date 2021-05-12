{{-- @extends('layouts.adminlayout')
@section('content') --}}
<x-adminlayout>
<h1 class=" sticky-md-top" style="text-align: right;">Contact Message Page</h1>
<table class="table caption-top table-hover">
  <caption>
    List of users
  </caption>
  <thead class="bg-success white-text-50">
    <tr>
        <th scope="col">Id</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($messages as $message )
        <tr>
      
      <td>{{$message->id}}</td>
      <td>{{$message->username}}</td>
      <td>{{$message->email}}</td>
       <td>{{$message->messages}}</td>
        <td><a href="{{route('editMessage',$message->id)}}" class="btn btn-success white-text btn-sm">Update</a></td>
         
         <td><a href="{{route('deleteMessage',$message->id)}}" class="btn btn-danger white-text btn-sm">Delete</a></td>
        
    </tr>
  @endforeach
   
  </tbody>
</table>
</x-adminlayout>
{{-- @endsection --}}