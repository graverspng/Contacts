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
        body {
            font-family: 'figtree', sans-serif;
            background-color: #1b2b34; /* Dark blue background for the theme */
            color: #c0c5ce; /* Light grey text for contrast */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #2c3e50; /* Slightly lighter blue for the container */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Adding some shadow for depth */
        }

        nav a {
            color: #3498db; /* Laravel blue accent color */
            text-decoration: none;
            padding: 8px 16px;
            border: 1px solid #3498db; /* Border color same as text */
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            margin: 0 10px; /* Spacing between buttons */
        }

        nav a:hover {
            background-color: #3498db; /* Background color on hover */
            color: #1b2b34; /* Text color on hover */
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="container">
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>
