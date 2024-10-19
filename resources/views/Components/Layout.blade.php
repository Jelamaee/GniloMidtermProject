<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - @yield('title')</title>

    <!-- External CSS Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Local CSS Files (using asset) -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
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
    <div id="details">
        <a class="btn_social" href="https://web.facebook.com/jelamae.gnilo" target="_blank">
            <i class="fab fa-facebook"></i> <!-- Facebook icon -->
        </a>
        <a class="btn_social" href="https://www.instagram.com/jela_jelz/" target="_blank">
            <i class="fab fa-instagram"></i> <!-- Instagram icon -->
        </a>
        <a class="btn_social" href="https://github.com/Jelamaee" target="_blank">
            <i class="fab fa-github"></i> <!-- GitHub icon -->
        </a>
    </div>
    <div class="copyright">
        &copy; <span id="current-year"></span> Jela Mae Gñilo. All rights reserved.
    </div>
</div>

<script>
    // JavaScript for toggling the hamburger menu
    const hamburger = document.querySelector('.hamburger');
    const navList = document.querySelector('.nav-list');

    // Function to toggle the menu when the hamburger is clicked
    hamburger.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent the click event from bubbling up to the document
        hamburger.classList.toggle('active'); // Toggle active class on hamburger
        navList.classList.toggle('active'); // Toggle active class on nav list
    });

    // Close the menu if clicked outside
    document.addEventListener('click', (event) => {
        // Check if the click is outside the hamburger and the nav list
        if (!hamburger.contains(event.target) && !navList.contains(event.target)) {
            hamburger.classList.remove('active'); // Remove active class from hamburger
            navList.classList.remove('active'); // Remove active class from nav list
        }
    });

    // Set current year in copyright
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

<!-- Local JavaScript Files (using asset) -->
<script type="text/javascript" src="{{ asset('js/style.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>

<!-- Vendor Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>

<!-- Custom Script -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>
