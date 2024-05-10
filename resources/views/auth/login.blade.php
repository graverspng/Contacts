<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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
            max-width: 300px;
            height: 350px;
            margin: auto;
            padding: 40px;
            text-align: center;
            background-color: #2c3e50; /* Slightly lighter blue for the container */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Adding some shadow for depth */
        }

        h1 {
            font-size: 45px;
            text-align: center;
            margin-right: 10px;

        }

        input[type="email"],
        input[type="password"],
        input[type="checkbox"] {
            width: 250px;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
            border: 2px solid #3498db;
            display: block; /* Make inputs block elements */
            margin: 0 auto; /* Center the inputs */
        }

        input[type="email"] {
            margin-top: 45px;
        }
        
        input[type="password"] {
            margin-top: 25px;
        }

        button {
            width: 150px;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            
        }

        button:hover {
            background-color: #1b2b34;
            color: #3498db;
            transition: 0.5s;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            color: #1b2b34;
        }

        .forgotandreg {
            margin-top:10px
        }

        .registee {
            margin-top:10px;
            margin-left:5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>Login</h1>

            <input type="email" id="email" name="email" placeholder="Email" required autofocus>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <button type="submit">Log in</button>

            <br>
            <div class="forgotandreg">

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            @endif

            <div class="registee">
            @if (Route::has('register'))
                <a href="/register">Register</a>
            @endif
            </div>
            </div>
        </form>
    </div>
</body>
</html>
