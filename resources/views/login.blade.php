@extends('layout')

@section('title')
    Login
@endsection

@section('content')
    
    <h1>Login</h1>
    
    <form action="/login" method="post">
        {{csrf_field()}}
        Username <input type="text" name="username"></br>
        Password <input type="password" name="password"></br>
        <input type="submit" value="Login">
    </form>
@endsection