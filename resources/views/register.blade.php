@extends('master')
@section("content")
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4  col-sm-offset-4">

                @if($errors->any())
                @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
                @endforeach
                <br>
                @endif

                <h3 class=" display-1 text-center">Register Form</h3><br>
                <div class="jumbotron ">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-group"> 
                            <label for="name">User name</label>
                            <input type="text" name="name" class="form-control" b placeholder="User Name">
                            <span style="color:red;">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group"> 
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <span style="color:red;">@error('email'){{$message}}@enderror</span>
                            </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <span style="color:red;">@error('password'){{$message}}@enderror<br></span>
                        </div>
            
                        <button type="submit" class="btn btn-default">Register</button>
                       </form>
                </div>
                
            </div> 
       </div>
   </div>
@endsection