<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Orders</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF9EE] text-gray-800">

<nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">

<h1 class="text-5xl text-[#E95A8B]"
style="font-family:'Corinthia',cursive;">
PetalCart
</h1>

<div class="flex gap-8 font-medium">
<a href="/dashboard">Home</a>
<a href="/cart">Shop</a>
<a href="/orders" class="text-[#E95A8B] font-bold">Orders</a>
<a href="/profile">Profile</a>
</div>

</nav>

<section class="px-10 py-12">

<h2 class="text-4xl font-bold">
My Orders 🌸
</h2>

<p class="text-gray-500 mt-2">
Track your bouquet orders here
</p>


<div class="space-y-6 mt-10">


<div class="bg-white rounded-3xl p-6 shadow">

<div class="flex justify-between">

<div>

<h3 class="font-bold text-xl">
Baby Breath Bouquet
</h3>

<p class="text-gray-500 mt-2">
Order ID: #PTL1001
</p>

<p class="text-sm text-gray-500">
Qty: 1
</p>

</div>

<div class="text-right">

<p class="text-[#E95A8B] font-bold">
On Delivery 🚚
</p>

<p class="mt-2">
Rp 175.000
</p>

</div>

</div>

</div>



<div class="bg-white rounded-3xl p-6 shadow">

<div class="flex justify-between">

<div>

<h3 class="font-bold text-xl">
Peony Bouquet
</h3>

<p class="text-gray-500 mt-2">
Order ID: #PTL1002
</p>

<p class="text-sm text-gray-500">
Qty: 2
</p>

</div>

<div class="text-right">

<p class="text-green-600 font-bold">
Completed ✓
</p>

<p class="mt-2">
Rp 320.000
</p>

</div>

</div>

</div>


</div>

</section>

</body>
</html>