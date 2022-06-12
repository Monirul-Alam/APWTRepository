@extends('layout.app')
@include('inc.register-css')
@section('Contain')

  <form action="{{route('contact.submit')}}" method="post">
        

        {{csrf_field()}}
        <h1>Contact us</h1>
        <fieldset>
          
          <label for="name">Name:</label>
          <input type="text" id="name" name="contact_name">
          @error('contact_name')
              <span class="text-danger">{{$message}}</span><br>
          @enderror
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="contact_email">
          @error('contact_name')
              <span class="text-danger">{{$message}}</span><br>
          @enderror

          <label for="bio">Message:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
          
        <button id="bio1" type="submit">Submit</button>
        
        </fieldset>

  </form>
@endsection