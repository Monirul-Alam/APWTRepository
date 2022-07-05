@extends('layout.app')
@section('Contain')
<h1>list</h1>

<table border = "1">

<tr>
  <th>Id</th>
  <th>Name</th> 
  <th>Email</th>
  <th>Password</th>
  <th>Reg. Date</th>
</tr>
@foreach($admins as $admins)
  <tr>
    <td>{{$admins->id}}</td>
    <td>{{$admins->user_name}}</td>
    <td>{{$admins->user_email}}</td>
    <td>{{$admins->user_password}}</td>
    <td>{{$admins->created_at}}</td>
    <td><a class="btn btn-primary" href= "{{route('admins.edit',['id'=>encrypt($admins->id)])}}">Edit</a></td>
    <!-- $admin came from 13no -->
  </tr>
@endforeach
</table>
@endsection