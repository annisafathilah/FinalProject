<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PetalCart</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen bg-[#efe3a5] flex items-center justify-center">

    <!-- Login Card -->
    <div class="w-full max-w-md bg-white rounded-[35px] shadow-2xl px-8 py-10">

        <!-- Logo Text -->
        <div class="text-center mb-8">
            <h1 class="text-pink-500 text-7xl leading-none"
                style="font-family:'Corinthia', cursive;">
                PetalCart
            </h1>

            {{-- <p class="text-2xl text-gray-700 mt-2">
                Welcome Back 🌸
            </p> --}}

            <p class="text-gray-400 ">
                Login to continue your blooming journey 🌸
            </p>
        </div>

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-5">
                <label class="block mb-2 text-gray-700 font-medium">
                    Email
                </label>

                <input type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="w-full rounded-2xl border-2 border-pink-300 px-5 py-3 focus:ring-pink-400 focus:border-pink-400">
            </div>

            <!-- Password -->
            <div class="mb-5">
                <label class="block mb-2 text-gray-700 font-medium">
                    Password
                </label>

                <input type="password"
                    name="password"
                    required
                    class="w-full rounded-2xl border-2 border-pink-300 px-5 py-3 focus:ring-pink-400 focus:border-pink-400">
            </div>

            <!-- Remember + Forgot -->
            <div class="flex justify-between items-center mb-6 text-sm">

                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember"
                        class="rounded border-pink-400 text-pink-500">
                    Remember me
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-pink-500 hover:underline">
                        Forgot Password?
                    </a>
                @endif

            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-4 rounded-2xl shadow-lg transition duration-300">
                LOG IN
            </button>

            <!-- Register -->
            <p class="text-center text-gray-500 mt-8">
                Don't have an account?
                <a href="{{ route('register') }}"
                   class="text-pink-500 font-semibold hover:underline">
                    Register
                </a>
            </p>

        </form>

    </div>

</body>
</html>