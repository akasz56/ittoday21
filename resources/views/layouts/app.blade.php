<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'IT Today 2021')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>body {font-family: 'Montserrat', sans-serif;}</style>
</head>

<body class="antialiased">
    <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('event') }}">Events</a>
        <a href="{{ route('competition') }}">Competitions</a>
        @auth            
            <a href="{{ route('dashboard') }}">Dashboard</a>    
            <a href="{{ route('logout') }}">Logout</a>    
        @endauth
        @guest
            <a href="{{ route('login') }}">Log in</a>
            <a href="{{ route('register') }}">Register</a>
        @endguest
    </div>
    <hr>

    @yield('content')
    
    <hr>
    Made by Akas with Love
</body>
</html>