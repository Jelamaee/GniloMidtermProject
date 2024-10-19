@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')

<div id="portfolio">
    <div class="lab">
        <h1>Laboratory Activity No. 4 - Middleware</h1>
        <p>This was our fourth laboratory activity, focused on Middleware. 
            It involved creating and registering middleware, assigning middleware to routes, and creating middleware with parameters.
        </p>
        <div class="collage">
            <img src="img/lab4.png" alt="Lab 4">
            <img src="img/lab4.1.png" alt="Lab 4.1">
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
                <p>From this laboratory activity, I learned how to create middleware, assign middleware to routes, 
                    and create middleware with parameters.
                </p>

            <!-- Challenges Section -->
            <div id="challenges" style="display:none;">
                <h3>Challenges:</h3>
                <p>The fourth laboratory activity, which focused on middleware, was the most challenging for me. 
                    It took us several days to fix the issue with the LogRequests middleware, where the log.txt file was not being created or displayed, 
                    even though we used the "append" method. However, we eventually resolved it, and everything worked as expected in the end.
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
