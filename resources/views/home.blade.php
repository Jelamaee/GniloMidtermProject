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
            <h3>Hello! I'm Jela Mae, a college student currently immersed in the dynamic world of Information Technology. 
                I am pursuing Bachelor of Science in Information Technology at Bicol University College of Science, I am 
                dedicated to exploring the vast possibilities that technology offers.</h3>
        </div>
    </div>
</div>

<div id="know-more">
    <h2>About My Likes</h2>
    <p>In my free time, I love to read books, listen to music, cook delicious meals, and plant. 
        I really enjoy reading, and my favorite author is Jonaxx. I also love listening to music, particularly OPM and R&B songs. 
        Arthur Nery is one of my favorite singer-songwriters. His songs are amazing, and though most of them are sad, 
        I find his voice incredibly relaxing.
    </p>

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

    <div id="contact">
                 <h1>Contact</h1> 
                 <form>
                     <input type="text" placeholder="Name" required>
                     <input type="email" placeholder="Email" required><br>
                     <textarea placeholder="Your message" required rows="5"></textarea><br>
                     <button class="btn_one">Send</button>
                 </form> 
                 <div id="details">
                    <a class="btn_social" href="tel:+1234567890"><i class="fas fa-phone"></i></a>
                    <a class="btn_social" href="mailto:jmng2022-7904-97516@bicol-u.edu.ph"><i class="fas fa-at"></i></a>
                    <a class="btn_social" href="https://web.facebook.com/jelamae.gnilo" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a class="btn_social" href="https://github.com/Jelamaee" target="_blank"><i class="fab fa-github"></i></a>
                </div>
  
             </div>

    <script>
    // JavaScript for typing effect
    const username = "{{ $username }}"; // Fetching the username
    const greetingElement = document.getElementById("greeting"); // Getting the greeting element
    const greetingText = `Hello there, ${username}! Welcome to my Portfolio :)`; // The text to be typed
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