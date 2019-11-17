@extends('layout')
<!doctype html>
<html lang="en">
<head>
    @section('title', 'Create User')
</head>
<body>
@section('content')
    <h1>Create User</h1>

    <form action="/create" method="post">
        {{csrf_field()}}
        Username <input type="text" name="username"></br>
        Email <input type="text" name="email"></br>
        Password <input type="password" name="password"></br>
        Confirm Password  <input type="password" name="password_confirmation"></br>
        <input type="submit" value="Create">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
</body>
</html>