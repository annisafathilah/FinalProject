<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetalCart</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="text-gray-800">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-5 bg-white/80 backdrop-blur-md fixed w-full z-50 shadow-md">
        <h1 class="text-2xl font-bold text-pink-500">PetalCart</h1>

        <div class="space-x-6 hidden md:flex">
            <a href="#home" class="hover:text-pink-500">Home</a>
            <a href="#about" class="hover:text-pink-500">About</a>
            <a href="#contact" class="hover:text-pink-500">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section 
        class="min-h-screen bg-no-repeat bg-cover bg-center flex items-center justify-start relative"
        style="background-image: url('{{ asset('images/yes.png') }}'); background-size: cover;">

        <!-- Overlay -->
        {{-- <div class="absolute inset-0 bg-black/40"></div> --}}

        <!-- Text -->
        <div class="relative z-10 text-left text-white px-20">
            <h2 class="text-4xl font-bold">
                Welcome to 
                <br><span class="text-9xl font-bold text-pink-500" style="font-family: 'Corinthia', cursive;">PetalCart</span>
            </h2>

            <p class="text-2xl">
                It's Time to Bloom with Us🌸
            </p>

            <div class="mt-8">
                <a href="/register"
                   class="bg-pink-500 px-10 py-3 rounded-full hover:bg-pink-600">
                    Shop Now
                </a>
            </div>
        </div>

    </section>
<section id="about" class="bg-[#fff8fb] py-24 px-10">

    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- Image -->
        <div>
            <img src="{{ asset('images/yes.png') }}"
            class="rounded-3xl shadow-xl">
        </div>

        <!-- Text -->
        <div>

            <h2 class="text-5xl text-pink-500 mb-6 font-bold">
                About Us
            </h2>

            <p class="text-lg text-gray-600 leading-relaxed">
                PetalCart hadir untuk membawa keindahan bunga
                ke setiap momen spesialmu.
                Kami menyediakan rangkaian bunga segar,
                bouquet elegan, dan hadiah penuh makna.
            </p>

            <p class="text-lg text-gray-600 leading-relaxed mt-5">
                Karena kami percaya, bunga bukan sekadar hadiah,
                tetapi cara terbaik menyampaikan rasa sayang.
            </p>

            <!-- Cards -->
            <div class="grid grid-cols-3 gap-5 mt-10">

                <div class="bg-white p-5 rounded-2xl text-center shadow">
                    <p class="text-4xl">🌸</p>
                    <p class="mt-2 font-semibold">Fresh</p>
                </div>

                <div class="bg-white p-5 rounded-2xl text-center shadow">
                    <p class="text-4xl">🚚</p>
                    <p class="mt-2 font-semibold">Fast</p>
                </div>

                <div class="bg-white p-5 rounded-2xl text-center shadow">
                    <p class="text-4xl">💖</p>
                    <p class="mt-2 font-semibold">Lovely</p>
                </div>

            </div>

        </div>

    </div>

</section>



<!-- CONTACT -->
<section id="contact" class="bg-white py-24 px-10 text-center">

    <h2 class="text-5xl font-bold text-pink-500 mb-6">
        Contact Us
    </h2>

    <p class="text-lg text-gray-600">
        Email : petalcart@gmail.com
    </p>

    <p class="text-lg text-gray-600 mt-3">
        Instagram : @petalcart
    </p>

</section>



<!-- Footer -->
<footer class="py-6 text-center text-gray-500 bg-[#fff8fb]">
    © 2026 PetalCart. All rights reserved.
</footer>

</body>
</html>