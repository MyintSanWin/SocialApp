{{-- @extends('layouts.adminlayout')
@section('content') --}}
<x-adminlayout>
<h1 class="sticky-top" style="text-align: right;">Manage Premium Users Page</h1>
<table class="table caption-top table-hover">
  <caption>
    List of users
  </caption>
  <thead class="bg-success white-text-50">
    <tr>
        <th scope="col">Id</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">is Admin</th>
      <th scope="col">is Premium</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $users)

    <tr>
      
      <td>{{$users->id}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
       <td><b>{{$users->isAdmin=='0'? "FALSE":"TRUE"}}</b></td>
       <td><b>{{$users->isPremium=='0'? "FALSE":"TRUE"}}</b></td>
        <td><a href="{{route('editUser',$users->id)}}" class="btn btn-success white-text btn-sm">Update</a></td>
         <td><a href="{{route('deleteUser',$users->id)}}" class="btn btn-danger white-text btn-sm">Delete</a></td>

    </tr>
    
    @endforeach
  </tbody>
</table>
</x-adminlayout>
{{-- @endsection --}}
