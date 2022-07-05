@extends('layout.app')
@section('Contain')
<h1> Our service </h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non a assumenda quasi quos facere natus ratione suscipit dicta. Explicabo amet ullam ducimus accusantium possimus impedit laborum aut a autem porro?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis ut fugiat voluptatum, omnis id ad dolorum qui, minima ex tempora error libero sapiente accusantium facere explicabo soluta eius reprehenderit, itaque sequi dolor doloremque. Modi, quo officia ipsum dolore, minima culpa rerum enim harum exercitationem earum repudiandae. Eligendi reprehenderit rerum possimus.</p>
@foreach($admins as $admins)
<!-- <ul>
    <li> {{$admins}}</li>
  </ul> -->

  <tr>
    <td>{{$admins->id}}</td>
    <td>{{$admins->user_email}}</td>
    <td>{{$admins->user_name}}</td>
    <td>{{$admins->created_at}}</td>
  </tr>
@endforeach
@endsection