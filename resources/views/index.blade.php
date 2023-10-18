<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Welcome Page</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('about') }}">About</a></li>
            <li><a href="{{ url('services') }}">Services</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href="{{ url('faqs') }}">FAQs</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>1st Laravel Activity - Ramos, Marc Emmanuel S.J.</h1>
    </div>
    <div class="gif">
        <img src="{{ asset('gif/snoop.gif') }}" alt="Example GIF">
    </div>
</body>
</html>
