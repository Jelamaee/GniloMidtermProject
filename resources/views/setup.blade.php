@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')

<div id="portfolio">
    <div class="lab1">
        <h1>Laboratory Activity No. 1 - Setup</h1>
        <p>This laboratory activity was our first activity. This about setting up and installing the Laravel.
            Our professor also gave us a task about creating views and routes.</p>
            <div class="collage">
                <img src="img/lab1.png" alt="lab1">
                <img src="img/lab1.1.png" alt="lab1">
            </div>
                
            <div class="description">
                <h3>Struggles:</h3>
                <p>The first laboratory activity involved setting up Laravel. For me, the setup was quite challenging. 
                    It took me about two days to resolve the issues. Even though there was a guide provided in the lecture, 
                    it still didn’t work. I had to search for solutions and watch YouTube videos to fix it. However, when I finally succeeded, 
                    I felt quite happy.</p> 
                    <h3>Learnings:</h3> 
                    <p>During this laboratory activity, I learned how to manipulate routes. It was somewhat amusing because every time 
                        I ran the program, it kept displaying '404 Not Found' since I forgot to add the routes. Since this was new to me,
                        I felt overwhelmed while completing the lab activity.</p>
                </div>
                <button class="btn_one">visit project</button>
            </div>
    </div>
</div>

<script src="js/style.js" type="text/javascript"></script>
@endsection