@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')

<div id="portfolio">
    <div class="lab1">
        <h1>Laboratory Activity No. 1 - Setup</h1>
        <p>This laboratory activity was our first activity. This was all about setting up and installing Laravel, 
            creating a Laravel project and putting it in the git repository, setting up the .env file to include the database 
            connections, creating views and routes, and identifying and documenting the purpose of each key directory and file in Laravel.</p>
            <div class="collage">
                <img src="img/lab1.png" alt="lab1">
                <img src="img/lab1.1.png" alt="lab1">
            </div>
                
            <div class="description">
                <h3>Learnings:</h3> 
                <p>During this laboratory activity, I learned how to install and set up Laravel, how to put the project in the git repository, 
                    create views and routes, and understand the purposes of each key directory in Laravel. I also learned how to manage routes. 
                    It was somewhat amusing because every time I ran the program, it kept displaying '404 Not Found' since I forgot to add the routes.
                    Despite this, I enjoyed the activity, even though it was overwhelming at times. Since this was new to me, I felt a bit challenged while 
                    completing the lab.</p>
                <h3>Struggles:</h3>
                <p>While doing this laboratory activity, the struggles I faced were, first, the installation and setup of Laravel, which was quite challenging. 
                    It took me about two days to resolve the issues. Even though there was a guide provided in the lecture, it still didn’t work. 
                    I had to search for solutions and watch YouTube videos to fix it. However, when I finally succeeded, I felt very happy. 
                    Second, putting the project in the git repository was unfamiliar to me, as it was my first time doing so. Lastly, 
                    creating the views and routes was difficult since I forgot to add the routes to the web.php file. It kept displaying '404 Not Found' 
                    because the routes weren't declared in web.php. But in the end, I managed to figure it out, remembering what Sir Azore told us during the lecture.</p> 
                </div>
                <button class="btn_one">visit project</button>
            </div>
    </div>
</div>

<script src="js/style.js" type="text/javascript"></script>
@endsection