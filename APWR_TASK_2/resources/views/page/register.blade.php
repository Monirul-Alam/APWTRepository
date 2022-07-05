@extends('layout.app')
@include('inc.register-css')
@section('Contain')
<form action="{{route('register.submit')}}" method="post">
        

        {{csrf_field()}}
        <h1>Sign Up</h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your basic info</legend>
          
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" value= "{{old('user_name')}}" >
          @error('user_name')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" value= "{{old('user_email')}}">
          @error('user_email')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          @error('user_password')
              <span class="text-danger">{{$message}}</span><br>
          @enderror

          <label for="password">Confirm Password:</label>
          <input type="password" name="user_com_password">
          @error('user_com_password')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          
         
        </fieldset>
        
        <fieldset>
        
          <legend><span class="number">2</span> Your profile</legend>

        <label for="gender">Gender:</label>
        
        <select id="gender-form" name="user_gender">
	          <option value="none" selected>Gender</option>
	          <option value="male">Male</option>
	          <option value="female">Female</option>
	          <option value="other">other</option>
        
        </select>
       
        <label for="bio">Location:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
          
        <button id="bio1" type="submit">Sign Up</button>
        
      </form>
      
@endsection