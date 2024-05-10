<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<style>
    <style>
        body {
            background-color: #1b2b34; /* Dark blue background for the theme */
            color: #c0c5ce; /* Light grey text for contrast */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        * {
            background-color: #1b2b34;
        }

        .container {
            max-width: 300px;
            height: 350px;
            margin: auto;
            margin-top:50px;
            padding: 40px;
            text-align: center;
            background-color: #2c3e50;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Adding some shadow for depth */
        }

        h1 {
            font-size: 45px;
            text-align: center;
            margin-right: 10px;

        }

        input[type="text"],
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

<body>  
    
    
<title>Register</title>
<div class="container">
<x-guest-layout>
    <div class="fixer">
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
            </div>    
            </div>
    </form>
    </div>
</x-guest-layout>
</body>
