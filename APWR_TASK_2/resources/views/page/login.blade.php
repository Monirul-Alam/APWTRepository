@extends('layout.app')
@include('inc.register-css')
@section('Contain')
<form action="{{route('login.submit')}}" method="post">
{{csrf_field()}}
        <h1>Sign In</h1>

        
        <fieldset>
          
          <label for="name">UserName:</label>
          <input type="text" id="name" name="user_name1">
          @error('user_name1')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email1">
          @error('user_email1')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password1">
          @error('user_name1')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          
         
        </fieldset>

          
        <button id="bio1" type="submit">Sign in</button>
        
      </form>
      
@endsection