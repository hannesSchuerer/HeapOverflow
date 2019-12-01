<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
</head>
<body>

<div class="container">
    <a href="/">Home</a>
    <a href="/tags">My Tags</a>
    <a href="/tags/create">Create Tag</a>
</div>

<div class="container">
    @yield('content')
</div>
</body>
</html>

