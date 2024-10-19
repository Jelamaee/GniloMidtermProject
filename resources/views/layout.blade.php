@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')

<div id="portfolio">
    <div class="lab3">
        <h1>Laboratory Activity No.3 - Layout</h1>
        <p>This was our third laboratory. Creating layout file</p>
            <div class="collage">
                <img src="img/lab3.png" alt="lab3">
                <img src="img/lab3.1.png" alt="lab3">
            </div>
                
            <div class="description">
                <h3>Struggles:</h3>
                <p>The third laboratory activity focused on the layout. This was quite easy; the main point of this 
                    activity was to reduce repetitive code. By using the layout, one of the advantages is that it 
                    becomes easy to modify the web pages since the CSS is in one file. However, there was also a 
                    disadvantage: since everything is in one file, some designs were affected, but we were able to fix them. 
                    We also added another web page, the menu page, because we were instructed to include another page that could 
                    be used in the database. While doing this activity, I was somewhat confused about how to use the extends and 
                    section keywords.</p>
                <h3>Learnings:</h3>
            </div>
            <button class="btn_one">visit project</button>
    </div>
</div>
@endsection