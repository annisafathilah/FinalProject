<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Checkout</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF9EE] text-gray-800">

<nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">

<h1 class="text-5xl text-[#E95A8B]"
style="font-family:'Corinthia',cursive;">
PetalCart
</h1>

<div class="flex gap-8">
<a href="/customer/dashboard">Home</a>
<a href="/cart">Cart</a>
<a href="/orders">Orders</a>
</div>

</nav>


<section class="px-10 py-10">

<h2 class="text-4xl font-bold mb-8">
Checkout 🌸
</h2>

<div class="grid md:grid-cols-2 gap-8">

<!-- kiri -->
<div class="bg-white rounded-3xl shadow p-6">

<h3 class="font-bold text-2xl mb-5">
Shipping Details
</h3>

<form>

<label class="font-medium">Full Name</label>
<input type="text"
class="w-full p-3 rounded-xl border mt-2 mb-4">

<label class="font-medium">Phone Number</label>
<input type="text"
class="w-full p-3 rounded-xl border mt-2 mb-4">

<label class="font-medium">Address</label>
<textarea
class="w-full p-3 rounded-xl border mt-2 mb-4 h-32"></textarea>

<label class="font-medium">
Payment Method
</label>

<select
class="w-full p-3 rounded-xl border mt-2">

<option>Cash On Delivery</option>
<option>Bank Transfer</option>
<option>E-Wallet</option>

</select>

</form>

</div>


<!-- kanan -->
<div>

<div class="bg-white rounded-3xl shadow p-6">

<h3 class="font-bold text-2xl mb-5">
Order Summary
</h3>

@php $total=0; @endphp

@foreach($cart as $item)

@php
$total += $item['price'];
@endphp

<div class="flex justify-between mb-4">

<span>
{{ $item['name'] }}
</span>

<span>
Rp {{ number_format($item['price'],0,',','.') }}
</span>

</div>

@endforeach


<hr class="my-5">


<div class="flex justify-between text-xl font-bold">

<span>Total</span>

<span class="text-[#E95A8B]">

Rp {{ number_format($total,0,',','.') }}

</span>

</div>


<form action = "/place-order" method = "POST">

@csrf

<button
type = "submit"
class="w-full mt-8 bg-[#E95A8B] hover:bg-pink-600 text-white py-3 rounded-xl">

Place Order 🌷

</button>

</form>

</div>

</div>

</div>

</section>

</body>
</html>