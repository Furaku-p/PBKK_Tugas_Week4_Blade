<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Profile')</title>
    <meta name="description" content="Academic profile built with Laravel Blade and Vite.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="@yield('body-class')">
    <div class="noise"></div>

    <nav class="nav container">
        <a class="brand" href="{{ route('home') }}"><span class="brand-dot"></span> student.dev</a>
        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('agent.show') }}">AI Idea</a>
            <a href="{{ route('profile') }}">Profile</a>
        </div>
        <a class="nav-cta" href="{{ route('agent.show') }}">Idea Lab ↗</a>
    </nav>

    <main>@yield('content')</main>

    <footer class="footer container">
        <span>Built with Laravel + Blade + Vite</span>
        <span>PBKK · ITS · 2026</span>
    </footer>
</body>
</html>
