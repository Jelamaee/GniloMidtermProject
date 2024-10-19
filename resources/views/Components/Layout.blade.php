<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>

@if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
<header class="site-header">
    <nav class="nav">
        <div class="hamburger">&#9776;</div>
        <ul class="nav-list">
            <li class="nav-item"><a href="{{ route('home', ['username' => $username]) }}">Home</a></li>
            <li class="nav-item"><a href="{{ route('setup', ['username' => $username]) }}">Setup</a></li>
            <li class="nav-item"><a href="{{ route('routes', ['username' => $username]) }}">Routes</a></li>
            <li class="nav-item"><a href="{{ route('layout', ['username' => $username]) }}">Layout</a></li>
            <li class="nav-item"><a href="{{ route('middleware', ['username' => $username]) }}">Middleware</a></li>
        </ul>
    </nav>
</header>
@endif

    <main>
        @yield('content')
    </main>

    <div id="footer">
       
    </div>
<script src="js/style.js" type="text/javascript"></script>


<script>
    const hamburger = document.querySelector('.hamburger');
    const navList = document.querySelector('.nav-list');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navList.classList.toggle('active');
    });
</script>
</body>
</html>