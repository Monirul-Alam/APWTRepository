@extends('layout.app')
@include('inc.register-css')
@section('Contain')
<form action="{{route('user_register.submit')}}" method="post">
        
<!-- user1 is User and user is admin -->
        {{csrf_field()}}
        <h1>User's Sign Up</h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your basic info</legend>
          
          <label for="name">Name:</label>
          <input type="text" id="name" name="user1_name" value= "{{old('user1_name')}}" >
          @error('user1_name')
              <span class="text-danger">{{$message}}</span><br>
          @enderror

          <input type="email" id="mail" name="user1_email" value= "{{old('user1_email')}}">
          @error('user1_email')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user1_password">
          @error('user1_password')
              <span class="text-danger">{{$message}}</span><br>
          @enderror

          <label for="password">Confirm Password:</label>
          <input type="password" name="user1_com_password">
          @error('user1_com_password')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          
         
        </fieldset>
        
        <fieldset>
        
          <legend><span class="number">2</span> Your profile</legend>

        <label for="gender">Gender:</label>
        
        <select id="gender-form" name="user1_gender">
	          <option value="none" selected>Gender</option>
	          <option value="male">Male</option>
	          <option value="female">Female</option>
	          <option value="other">other</option>
        
        </select>
       
        <label for="bio">Location:</label>
          <textarea id="bio" name="user1_bio"></textarea>
        </fieldset>
          
        <button id="bio1" type="submit">Sign Up</button>
        
      </form>
      
@endsection