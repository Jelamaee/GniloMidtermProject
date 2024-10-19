<?php

use Illuminate\Support\Facades\Route;

// Apply LogRequests middleware to specific routes or all routes

// Route for the login page
Route::get('/', function () {
    return view('login', ['username' => 'Guest'])->with('hideNavAndFooter', true);
})->name('login');

// Route for the welcome page with dynamic username
Route::get('/home/{username}', function ($username) {
    return view('home', ['username' => $username]);
})->name('home');

// LogRequests middleware globally to all routes or specific routes
Route::middleware([App\Http\Middleware\LogRequests::class])->group(function () {
    Route::get('/setup{username}', function ($username) {
        return view('setup', ['username' => $username]);
    })->name('setup');

    Route::get('/routes{username}', function ($username) {
        return view('routes', ['username' => $username]);
    })->name('routes');

    Route::get('/layout{username}', function ($username) {
        return view('layout', ['username' => $username]);
    })->name('layout');

    Route::get('/middleware{username}', function ($username) {
        return view('middleware', ['username' => $username]);
    })->name('middleware');
});

// A POST route example with validation
Route::post('/homepage', function (\Illuminate\Http\Request $request) {
    // Validate that the username only contains alphabetic characters (a-z, A-Z)
    $request->validate([
        'username' => 'required|alpha'
    ], [
        'username.alpha' => 'The username should only contain alphabetic characters.',
        'username.required' => 'The username field is required.'
    ]);

    $username = $request->input('username', 'Guest');
    return redirect("/home/$username");
});


