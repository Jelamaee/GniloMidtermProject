<!-- resources/views/homepage.blade.php -->
@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 

<h1>Hi, {{ $username }}</h1>

<div id="middle">
    <img src="{{ asset('img/jela.jpg') }}" alt="Jela">
    <h3>Hi! I'm Jela. I'm happy that your reading this. Want to know more about Jela?</h3>
</div>

@endsection