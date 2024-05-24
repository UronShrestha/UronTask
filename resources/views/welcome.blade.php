<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'figtree', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .content {
            text-align: center;
        }
       
        
        .links {
            margin-top: 1rem;
            
        }
        .link {
            font-size: 1.5rem; 
            color: #f3f5f7; 
           
            display: block;
            margin: 1rem;
            padding: 1rem;
            border-radius: 50px;
            background-color: #0f4e81;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
           
            <div class="links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="link">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</body>
</html>
