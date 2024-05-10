<x-guest-layout>
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

        .contentter {
            display:flex;
            justify-content:center;
            align-items:center;
            
        }

        .centertexter2 {
            margin-top:20px;
            text-align:center;

        }
        
        .backtologin {
            margin-top:15px;
            margin-left:5px;
        }


        .backtologin:hover {
            color:blue;
            transition:0.5s;
        }
    </style>

    <div class="centertexter">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Your form and other content -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
        <div class="centertexter2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>
        
        <div class="contentter">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
            <a class="backtologin" href="{{ route('login') }}">
                {{ __('Back to Login') }}
            </a>
        </div>
    </form>
</x-guest-layout>
