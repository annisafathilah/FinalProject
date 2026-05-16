{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PetalCart Customer</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF9EE] text-gray-800">

@php

/*
|--------------------------------------------------------------------------
| DATA PRODUK
|--------------------------------------------------------------------------
| sold = jumlah terjual
| colors = pilihan warna bunga
*/

$products = [

[
    'name' => 'Anemone ',
    'price' => 150000,
    'image' => 'Anemone.jpg',
    'sold' => 12,
    'colors' => ['Pink', 'White', 'Cream']
],

[
    'name' => 'Baby Breath',
    'price' => 175000,
    'image' => 'babyb.jpg',
    'sold' => 98,
    'colors' => ['Red', 'Pink', 'White']
],

[
    'name' => 'Peony',
    'price' => 160000,
    'image' => 'peony.jpg',
    'sold' => 87,
    'colors' => ['Purple', 'Lilac', 'White']
],

[
    'name' => 'Red Rose',
    'price' => 145000,
    'image' => 'redrose.jpg',
    'sold' => 80,
    'colors' => ['Yellow', 'Orange']
],

[
    'name' => 'Orchid',
    'price' => 180000,
    'image' => 'orchid.jpg',
    'sold' => 77,
    'colors' => ['Blue', 'White']
],

[
    'name' => 'Sunflower',
    'price' => 200000,
    'image' => 'matahari.jpg',
    'sold' => 74,
    'colors' => ['Pink', 'Soft Pink']
],

[
    'name' => 'Lily',
    'price' => 165000,
    'image' => 'lily.jpg',
    'sold' => 70,
    'colors' => ['Gold', 'Yellow']
],

[
    'name' => 'Daisy',
    'price' => 130000,
    'image' => 'daisy.jpg',
    'sold' => 65,
    'colors' => ['White', 'Yellow']
],

[
    'name' => 'Chrysanthemum',
    'price' => 185000,
    'image' => 'Chrysanthemum.jpg',
    'sold' => 60,
    'colors' => ['Pink', 'Red']
],

[
    'name' => 'Hydrangea',
    'price' => 210000,
    'image' => 'hydrangea.jpg',
    'sold' => 58,
    'colors' => ['White', 'Orange']
],

[
    'name' => 'Iris',
    'price' => 170000,
    'image' => 'iris.jpg',
    'sold' => 55,
    'colors' => ['Blue', 'Purple']
],

[
    'name' => 'Tulip',
    'price' => 195000,
    'image' => 'tulip.jpg',
    'sold' => 52,
    'colors' => ['Red', 'Maroon']
],


];

/*
|--------------------------------------------------------------------------
| SORT BEST SELLER
|--------------------------------------------------------------------------
*/

$bestSeller = collect($products)
                ->sortByDesc('sold')
                ->take(3);

@endphp

<!-- Navbar -->
<nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">

    <h1 class="text-5xl text-[#E95A8B]"
        style="font-family:'Corinthia',cursive;">
        PetalCart
    </h1>

    <div class="flex gap-8 font-medium">
        <a href="#" class="hover:text-[#E95A8B]">Home</a>
        <a href="#" class="hover:text-[#E95A8B]">Shop</a>
        <a href="#" class="hover:text-[#E95A8B]">Orders</a>
        <a href="#" class="hover:text-[#E95A8B]">Profile</a>
    </div>

</nav>

<!-- HERO -->
<section class="px-10 py-16 text-center">

    <h2 class="text-5xl font-bold leading-tight">
        Fresh Flowers for Every Moment 🌸
    </h2>

    <p class="mt-4 text-gray-600">
        Beautiful bouquets with elegant colors and premium quality.
    </p>

</section>

<!-- BEST SELLER -->
<section class="px-10 py-8">

<h3 class="text-3xl font-bold mb-8">
    Best Seller 🔥
</h3>

<div class="grid md:grid-cols-3 gap-8">

@foreach($bestSeller as $product)

<div class="bg-white rounded-3xl shadow p-5 hover:-translate-y-2 duration-300">

    <img src="{{ asset('images/'.$product['image']) }}"
    class="h-60 w-full object-cover rounded-2xl">

    <div class="mt-4 flex justify-between items-center">

        <h4 class="text-xl font-bold">
            {{ $product['name'] }}
        </h4>

        <span class="text-sm bg-pink-100 text-pink-600 px-3 py-1 rounded-full">
            {{ $product['sold'] }} Sold
        </span>

    </div>

    <p class="text-[#E95A8B] font-semibold mt-2">
        Rp {{ number_format($product['price'],0,',','.') }}
    </p>

    <!-- WARNA -->
    <div class="mt-4">
        <p class="text-sm font-semibold mb-2">
            Available Colors:
        </p>

        <div class="flex flex-wrap gap-2">

            @foreach($product['colors'] as $color)

            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">
                {{ $color }}
            </span>

            @endforeach

        </div>
    </div>

    <button class="mt-5 w-full bg-[#E95A8B] hover:bg-pink-600 text-white py-2 rounded-xl duration-300">
        Add to Cart
    </button>

</div>

@endforeach

</div>

</section>

<!-- ALL PRODUCTS -->
<section class="px-10 py-10">

<h3 class="text-3xl font-bold mb-8">
    All Products 🌷
</h3>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">

@foreach($products as $product)

<div class="bg-white rounded-3xl shadow p-4 hover:-translate-y-2 duration-300">

    <img src="{{ asset('images/'.$product['image']) }}"
    class="h-48 w-full object-cover rounded-2xl">

    <h4 class="text-lg font-bold mt-4">
        {{ $product['name'] }}
    </h4>

    <p class="text-[#E95A8B] font-semibold mt-1">
        Rp {{ number_format($product['price'],0,',','.') }}
    </p>

    <!-- PILIHAN WARNA -->
    <div class="mt-3">

        <p class="text-sm font-medium mb-2">
            Colors:
        </p>

        <div class="flex flex-wrap gap-2">

            @foreach($product['colors'] as $color)

            <span class="bg-gray-100 text-xs px-2 py-1 rounded-full">
                {{ $color }}
            </span>

            @endforeach

        </div>

    </div>

    <button class="mt-4 w-full bg-[#E95A8B] hover:bg-pink-600 text-white py-2 rounded-xl duration-300">
        Add to Cart
    </button>

</div>

@endforeach

</div>

</section>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PetalCart Customer</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF9EE] text-gray-800">

@php

/*
|--------------------------------------------------------------------------
| DATA PRODUK
|--------------------------------------------------------------------------
| sold = jumlah terjual
| colors = pilihan warna bunga
*/

$products = [

[
    'name'   => 'Anemone ',
    'price'  => 150000,
    'image'  => 'Anemone.jpg',
    'sold'   => 12,
    'colors' => ['Pink', 'White', 'Cream']
],

[
    'name'   => 'Baby Breath',
    'price'  => 175000,
    'image'  => 'babyb.jpg',
    'sold'   => 98,
    'colors' => ['Red', 'Pink', 'White']
],

[
    'name'   => 'Peony',
    'price'  => 160000,
    'image'  => 'peony.jpg',
    'sold'   => 87,
    'colors' => ['Purple', 'Lilac', 'White']
],

[
    'name'   => 'Red Rose',
    'price'  => 145000,
    'image'  => 'redrose.jpg',
    'sold'   => 80,
    'colors' => ['Yellow', 'Orange']
],

[
    'name'   => 'Orchid',
    'price'  => 180000,
    'image'  => 'orchid.jpg',
    'sold'   => 77,
    'colors' => ['Blue', 'White']
],

[
    'name'   => 'Sunflower',
    'price'  => 200000,
    'image'  => 'matahari.jpg',
    'sold'   => 74,
    'colors' => ['Pink', 'Soft Pink']
],

[
    'name'   => 'Lily',
    'price'  => 165000,
    'image'  => 'lily.jpg',
    'sold'   => 70,
    'colors' => ['Gold', 'Yellow']
],

[
    'name'   => 'Daisy',
    'price'  => 130000,
    'image'  => 'daisy.jpg',
    'sold'   => 65,
    'colors' => ['White', 'Yellow']
],

[
    'name'   => 'Chrysanthemum',
    'price'  => 185000,
    'image'  => 'Chrysanthemum.jpg',
    'sold'   => 60,
    'colors' => ['Pink', 'Red']
],

[
    'name'   => 'Hydrangea',
    'price'  => 210000,
    'image'  => 'hydrangea.jpg',
    'sold'   => 58,
    'colors' => ['White', 'Orange']
],

[
    'name'   => 'Iris',
    'price'  => 170000,
    'image'  => 'iris.jpg',
    'sold'   => 55,
    'colors' => ['Blue', 'Purple']
],

[
    'name'   => 'Tulip',
    'price'  => 195000,
    'image'  => 'tulip.jpg',
    'sold'   => 52,
    'colors' => ['Red', 'Maroon']
],


];
  /*
|--------------------------------------------------------------------------
| SORT BEST SELLER
|--------------------------------------------------------------------------
*/

$bestSeller = collect($products)
                ->sortByDesc('sold')
                ->take(3);

@endphp

<!-- Navbar -->
<nav class = "bg-white shadow-md px-8 py-4 flex justify-between items-center">

    <h1 class = "text-5xl text-[#E95A8B]"
        style = "font-family:'Corinthia',cursive;">
        PetalCart
    </h1>

    <div class = "flex gap-8 font-medium">
    <a   href  = "/" class = "hover:text-[#E95A8B]">Home</a>
    <a   href  = "/cart" class = "hover:text-[#E95A8B]">Cart</a>
    <a   href  = "/orders" class       = "hover:text-[#E95A8B]">Orders</a>
    <a   href  = "profile" class = "hover:text-[#E95A8B]">Profile</a>
    </div>

</nav>

<!-- HERO -->
<section class="px-10 py-16 text-center">

    <h2 class="text-5xl font-bold leading-tight">
        Fresh Flowers for Every Moment 🌸
    </h2>

    <p class="mt-4 text-gray-600">
        Beautiful bouquets with elegant colors and premium quality.
    </p>

</section>

<!-- BEST SELLER -->
<section class="px-10 py-8">

<h3 class="text-3xl font-bold mb-8">
    Best Seller 🔥
</h3>

<div class="grid md:grid-cols-3 gap-8">

@foreach($bestSeller as $product)

<div class="bg-white rounded-3xl shadow p-5 hover:-translate-y-2 duration-300">

    <img src="{{ asset('images/'.$product['image']) }}"
    class="h-60 w-full object-cover rounded-2xl">

    <div class="mt-4 flex justify-between items-center">

        <h4 class="text-xl font-bold">
            {{ $product['name'] }}
        </h4>

        <span class="text-sm bg-pink-100 text-pink-600 px-3 py-1 rounded-full">
            {{ $product['sold'] }} Sold
        </span>

    </div>

    <p class="text-[#E95A8B] font-semibold mt-2">
        Rp {{ number_format($product['price'],0,',','.') }}
    </p>

    <!-- WARNA -->
    <div class="mt-4">
        <p class="text-sm font-semibold mb-2">
            Available Colors:
        </p>

        <div class="flex flex-wrap gap-2">

            @foreach($product['colors'] as $color)

            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm">
                {{ $color }}
            </span>

            @endforeach

        </div>
    </div>

    <form action = "/add-to-cart" method = "POST">

@csrf

<input type="hidden" name="name" value="{{ $product['name'] }}">
<input type="hidden" name="price" value="{{ $product['price'] }}">
<input type="hidden" name="image" value="{{ $product['image'] }}">

<button
class="mt-4 w-full bg-[#E95A8B] hover:bg-pink-600 text-white py-2 rounded-xl duration-300">

Add to Cart

</button>

</form>

</div>

@endforeach

</div>

</section>

<!-- ALL PRODUCTS -->
<section class="px-10 py-10">

<h3 class="text-3xl font-bold mb-8">
    All Products 🌷
</h3>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">

@foreach($products as $product)

<div class="bg-white rounded-3xl shadow p-4 hover:-translate-y-2 duration-300">

    <img src="{{ asset('images/'.$product['image']) }}"
    class="h-48 w-full object-cover rounded-2xl">

    <h4 class="text-lg font-bold mt-4">
        {{ $product['name'] }}
    </h4>

    <p class="text-[#E95A8B] font-semibold mt-1">
        Rp {{ number_format($product['price'],0,',','.') }}
    </p>

    <!-- PILIHAN WARNA -->
    <div class="mt-3">

        <p class="text-sm font-medium mb-2">
            Colors:
        </p>

        <div class="flex flex-wrap gap-2">

            @foreach($product['colors'] as $color)

            <span class="bg-gray-100 text-xs px-2 py-1 rounded-full">
                {{ $color }}
            </span>

            @endforeach

        </div>

    </div>

    <form action = "/add-to-cart" method = "POST">

    @csrf

    <input type="hidden" 
           name="name" 
           value="{{ $product['name'] }}">

    <input type="hidden" 
           name="price" 
           value="{{ $product['price'] }}">

    <input type="hidden" 
           name="image" 
           value="{{ $product['image'] }}">

    <button
    type="submit"
    class="mt-4 w-full bg-[#E95A8B] hover:bg-pink-600 text-white py-2 rounded-xl duration-300">

        Add to Cart

    </button>

</form>

</div>

@endforeach

</div>

</section>

</body>
</html>