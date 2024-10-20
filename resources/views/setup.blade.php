@extends('Components.Layout')

@section('title', 'Setup')

@section('content')

<div id="portfolio">
    <div class="lab">
        <h1>Laboratory Activity No. 1 - Setup</h1>
        <p>This was our first laboratory activity, focused on setting up and installing Laravel. 
            The tasks included creating a Laravel project, adding it to a Git repository, configuring the .env file for database connections, 
            creating views and routes, and identifying and documenting the purpose of each key directory and file in Laravel.
        </p>
        <div class="collage">
            <img src="img/lab1.png" alt="Lab 1">
            <img src="img/lab1.1.png" alt="Lab 1.1">
        </div>

        <!-- Styled Toggle Buttons -->
        <div class="button-container">
            <button class="toggle-btn" onclick="toggleContent('learnings')">Learnings</button>
            <button class="toggle-btn" onclick="toggleContent('challenges')">Challenges</button>
        </div>

        <div class="description">
            <!-- Learnings Section -->
            <div id="learnings" style="display:none;">
                <h3>Learnings:</h3> 
                <p>In this laboratory activity, I learned how to install and set up Laravel, push the project to a Git repository, 
                    create views and routes, and understand the purpose of each key directory in Laravel. I also learned how to manage routes. 
                    It was somewhat amusing because, each time I ran the program, it kept showing a '404 Not Found' error since I forgot to add the routes.
                    Despite the challenges, I enjoyed the activity, although it was overwhelming at times. As this was new to me, I felt a bit challenged but fulfilled after completing the lab.
                </p>
            </div>

            <!-- Challenges Section -->
            <div id="challenges" style="display:none;">
                <h3>Challenges:</h3>
                <p>During this activity, my main struggles were with the installation and setup of Laravel, which took me about two days to resolve. 
                    Although there was a guide provided in the lecture, I still encountered issues, so I had to search for solutions online and watch YouTube tutorials. 
                    When I finally succeeded, it was very satisfying. Another challenge was pushing the project to the Git repository, as it was my first time doing so. 
                    Lastly, creating the views and routes was tricky because I forgot to add the routes to the web.php file, which caused a '404 Not Found' error. 
                    However, I eventually figured it out, recalling the advice Sir Azore gave us during the lecture.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleContent(sectionId) {
        // Get the section element by its ID
        var section = document.getElementById(sectionId);
        
        // Toggle the visibility of the section
        if (section.style.display === "none") {
            section.style.display = "block";
        } else {
            section.style.display = "none";
        }

        // Scroll to the section
        section.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection
