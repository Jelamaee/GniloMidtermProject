@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')

<div id="portfolio">
    <div class="lab2">
        <h1>Laboratory Activity No. 2 - Routes</h1>
        <p>This was our second laboratory activity, and it was a group activity consisting of three members. Our task was to create routes, 
            including routes with required parameters and routes with optional parameters.
        </p>
        <div class="collage">
            <img src="img/lab2.png" alt="Lab 2">
            <img src="img/lab2.1.png" alt="Lab 2.1">
        </div>
                
        <div class="description">
            <h3>Learnings:</h3>
            <p>From this laboratory activity, I learned how to handle both required and optional parameters in routes 
                and how they work with the navigation bar.
            </p>
            <h3>Challenges:</h3>
            <p>The challenge we encountered was figuring out how to manage the username across four navigation bars. 
                It was quite difficult to handle the passing of the username through all the navigation links.
            </p>
        </div>
    </div>
</div>

@endsection
