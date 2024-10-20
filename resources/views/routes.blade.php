@extends('Components.Layout')

@section('title', 'Routes')

@section('content')

<div id="portfolio">
    <div class="lab">
        <h1>Laboratory Activity No. 2 - Routes</h1>
        <p>This was our second laboratory activity, and it was a group activity consisting of three members. Our task was to create routes, 
            including routes with required parameters and routes with optional parameters. We were also instructed to add two more Blade files, 
            which are the "About Us" page and "Contact Us" page.
        </p>
        <div class="collage">
            <img src="img/lab2.png" alt="Lab 2">
            <img src="img/lab2.1.png" alt="Lab 2.1">
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
                <p>From this laboratory activity, I learned how to handle both required and optional parameters in routes 
                    and how they work with the navigation bars.
                </p>

            <!-- Challenges Section -->
            <div id="challenges" style="display:none;">
                <h3>Challenges:</h3>
                <p>The challenge we encountered was figuring out how to do and manage the username across four navigation bars. 
                    It was quite difficult to handle the passing of the username through all the navigation links. 
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
