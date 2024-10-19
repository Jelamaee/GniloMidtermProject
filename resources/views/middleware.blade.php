@extends('Components.Layout')

@section('title', 'Portfolio')

@section('content')

<div id="portfolio">
    <div class="lab4">
        <h1>Laboratory Activity No.4 - Middleware</h1>
        <p>This was our fourth laboratory activity. This was about creating Middleware.</p>
            <div class="collage">
                <img src="img/lab4.png" alt="lab4">
                <img src="img/lab4.1.png" alt="lab4">
            </div>
                
            <div class="description">
                <h3>Struggles:</h3>
                <p>The fourth laboratory activity focused on middleware. For me, this was the most difficult activity; 
                    it took us several days to fix the LogRequests because the log.txt file was not being created or displayed, 
                    even though we used "append." However, we were eventually able to fix it, and in the end, it worked.</p>
                <h3>Learnings:</h3>
            </div>
            <button class="btn_one">visit project</button>
    </div>
</div>

<script src="js/style.js" type="text/javascript"></script>
@endsection