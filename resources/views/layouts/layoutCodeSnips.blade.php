<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>

    <div class="navbar">
        <a class="section" href="/">Home</a>
        <a class="section" href="/codeSnips">My CodeSnips</a>
        <a class="section" href="/codeSnips/create">Create CodeSnip</a>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
