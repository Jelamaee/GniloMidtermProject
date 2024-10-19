<!-- resources/views/login.blade.php -->
@extends('Components.Layout')

@section('title', 'Log in')

@section('content')
    <main class="login-main">
        <div class="login-container">
            <h1>Login</h1>
            
        <!-- for log in form-->
            <form action="/homepage" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Enter your name" value="{{ old('username') }}" required>
                
                <!-- Display validation errors for the username -->
                @if ($errors->has('username'))
                    <div class="error-message">
                        {{ $errors->first('username') }}
                    </div>
                @endif
                
                <button type="submit">Login</button>
            </form>
            
            <!-- Second Form for Guest Login -->
            <form action="/homepage" method="POST">
                @csrf
                <input type="hidden" name="username" value="Guest">
                <button type="submit">Login as Guest</button>
            </form>
        </div>
    </main>
@endsection
