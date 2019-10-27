<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <ul>
        <li>
            <a href="/login">Login</a>
        </li>
        <li>
            <a href="/about">About us</a>
        </li>
        <li>
            <a href="/contact">Contact us</a>
        </li>
        <li>
            <a href="/">Home</a>
        </li>
    </ul>

</body>
</html>