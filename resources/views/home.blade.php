@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 

<div id="portfolio">
<h1 id="greeting"></h1> <!-- Updated to have an ID for the greeting -->
<div id="middle">
    <div class="content-container">
        <div class="image-container">
            <img src="{{ asset('img/jela.jpg') }}" alt="Jela">
        </div>
        <div class="text-container">
            <h3>Hi! I'm Jela Mae, a 3rd year BSIT student. It's good to know that you're here in my portfolio. Want to know more about Jela?</h3>
        </div>
    </div>
</div>

<div id="know-more">
    <h2>About My Likes</h2>
    <p>In my free time, I love to read books, listen to musics, cook delicious meals, and planting.
        I really enjoy reading books, my favorite Author is Jonaxx. I love listening to music,
        Arthur Nery is my favorite singer-songwriter.</p>
</div>
    <section class="travels">
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <div class="swiper-container" id="swiper-travel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/reading.jpg') }}" alt="Hoyop-Hoyopan Cave" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/jonaxx.jpg') }}" alt="Vera Falls" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/music.jpg') }}" alt="Daraga Church" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/arthur.jpg') }}" alt="Farm Plate" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/cooking.jpg') }}" alt="Pottery" class="img-circle">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/planting.jpg') }}" alt="Pinangat" class="img-circle">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
    // JavaScript for typing effect
    const username = "{{ $username }}"; // Fetching the username
    const greetingElement = document.getElementById("greeting"); // Getting the greeting element
    const greetingText = `Hi, ${username}!`; // The text to be typed
    let index = 0; // Initialize index to track the character being typed

    // Function to type out the greeting
    function typeGreeting() {
        if (index < greetingText.length) {
            greetingElement.innerHTML += greetingText.charAt(index); // Append the next character
            index++; // Move to the next character
            setTimeout(typeGreeting, 100); // Call the function again after a delay
        }
    }

    // Call the function when the page loads
    window.onload = function() {
        typeGreeting();
    };
</script>

@endsection
