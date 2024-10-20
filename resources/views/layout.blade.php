@extends('Components.Layout')

@section('title', 'Layout')

@section('content')

<div id="portfolio">
    <div class="lab">
        <h1>Laboratory Activity No. 3 - Layout</h1>
        <p>This was our third laboratory activity, and it was a continuation of our group work from Laboratory Activity No. 2.
            The focus of this activity was on creating a layout file and designing views that extend and include page-specific content.
        </p>
        <div class="collage">
            <img src="img/lab3.png" alt="Lab 3">
            <img src="img/lab3.1.png" alt="Lab 3.1">
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
                <p>Through this laboratory activity, I learned how to reduce repetitive code. The layout file is very helpful because whenever 
                    you need to modify a webpage, it’s easy to update other pages since they share a common CSS file. This is especially useful 
                    for maintaining uniformity across the website. We also added another webpage, the menu page, as we were instructed to include 
                    an additional page that could be used in the database. I really enjoyed this activity.
                </p>

            <!-- Challenges Section -->
            <div id="challenges" style="display:none;">
                <h3>Challenges:</h3>
                <p>This was the easiest activity that Sir Azore has given us so far, with the main goal being to reduce repetitive code. 
                    However, since everything was managed in one file, some designs were affected, though we were able to fix them. 
                    Initially, I was confused about how to use the extends and section directives, but in the end, I learned how to correctly use both.
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
