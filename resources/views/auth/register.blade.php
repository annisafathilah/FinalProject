<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PetalCart</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#efe3a5] flex items-center justify-center px-4 py-12">

<div class="w-full max-w-md bg-white rounded-[35px] shadow-2xl px-8 py-10">

    <!-- Header -->
    <div class="text-center mb-8">
        <h1 class="text-pink-500 text-7xl leading-none"
            style="font-family:'Corinthia', cursive;">
            PetalCart
        </h1>

        <p class="text-gray-400 mt-2">
            Create your account and start blooming🌸
        </p>
    </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name"
                    :value="__('Full Name')"
                    class="text-gray-700 font-medium mb-2" />

                <x-text-input id="name"
                    class="block mt-1 w-full rounded-2xl border-2 border-pink-300 px-5 py-3 focus:border-pink-400 focus:ring-pink-400"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name" />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email"
                    :value="__('Email')"
                    class="text-gray-700 font-medium mb-2" />

                <x-text-input id="email"
                    class="block mt-1 w-full rounded-2xl border-2 border-pink-300 px-5 py-3 focus:border-pink-400 focus:ring-pink-400"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autocomplete="username" />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password"
                    :value="__('Password')"
                    class="text-gray-700 font-medium mb-2" />

                <x-text-input id="password"
                    class="block mt-1 w-full rounded-2xl border-2 border-pink-300 px-5 py-3 focus:border-pink-400 focus:ring-pink-400"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation"
                    :value="__('Confirm Password')"
                    class="text-gray-700 font-medium mb-2" />

                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full rounded-2xl border-2 border-pink-300 px-5 py-3 focus:border-pink-400 focus:ring-pink-400"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Footer -->
            <div class="mt-6">

                <x-primary-button
                    class="w-full justify-center bg-pink-500 hover:bg-pink-600 text-white font-bold py-4 rounded-2xl shadow-lg">
                    {{ __('Register') }}
                </x-primary-button>

                <p class="text-center text-gray-500 mt-6">
                    Already have an account?
                    <a href="{{ route('login') }}"
                       class="text-pink-500 font-semibold hover:underline">
                        Log In
                    </a>
                </p>

            </div>

        </form>
</div>
</body>
</html>