<!DOCTYPE html>
<html>
<head>

<title>Cart</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF9EE]">

<nav class="bg-white shadow px-8 py-4 flex justify-between">

<h1 class="text-5xl text-[#E95A8B]"
style="font-family:'Corinthia',cursive;">
PetalCart
</h1>

<div class = "flex gap-8 font-medium">
<a   href  = "/dashboard" class     = "hover:text-[#E95A8B]">Home</a>
<a   href  = "/cart" class = "hover:text-[#E95A8B]">Cart</a>
    <a   href  = "/orders" class       = "hover:text-[#E95A8B]">Orders</a>
    <a   href  = "profile" class = "hover:text-[#E95A8B]">Profile</a>
    </div>

</nav>


<section class="px-10 py-10">

<h2 class="text-3xl font-bold mb-8">
My Cart 🛒
</h2>


@if(count($cart)==0)

<div class="bg-white rounded-3xl p-10 text-center shadow">

Cart is empty 🌸

</div>

@else


<div class="space-y-5">

@php $total=0; @endphp

@foreach($cart as $item)

@php
$total += $item['price'];
@endphp

<div class="bg-white p-5 rounded-3xl shadow flex items-center gap-5">

<img
src="{{ asset('images/'.$item['image']) }}"
class="w-28 h-28 rounded-xl object-cover">

<div>

<h3 class="font-bold text-xl">
{{ $item['name'] }}
</h3>

<p class="text-[#E95A8B]">
Rp {{ number_format($item['price'],0,',','.') }}
</p>

</div>

</div>

@endforeach


<div class="bg-white rounded-3xl p-5 shadow">

<h3 class="font-bold text-2xl">

Total:
Rp {{ number_format($total,0,',','.') }}

</h3>

<a href = "/checkout">

<button
class = "w-full mt-5 bg-[#E95A8B] text-white py-3 rounded-xl">

Checkout

</button>

</a>

</div>

</div>

@endif

</section>

</body>
</html>