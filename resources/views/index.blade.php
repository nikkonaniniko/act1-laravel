<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Welcome Page</title>
</head>
<body>
    {{-- <header>
        <h1>1st Laravel Activity - Ramos, Marc Emmanuel S.J.</h1>
    </header> --}}
    
    <nav>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Dashboard</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>1st Laravel Activity - Ramos, Marc Emmanuel S.J.</h1>
        <img src="{{ asset('gif/snoop.gif') }}" alt="Example GIF">
    </div>
</body>
</html>
