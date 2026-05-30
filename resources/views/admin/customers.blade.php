<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PetalCart Customers</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF8D6] text-gray-800">

<nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">

<h1 class="text-5xl text-[#E95A8B]"
style="font-family:'Corinthia',cursive;">
PetalCart
</h1>

<div class="flex gap-8 font-medium">
<a href="/admin/dashboard">Dashboard</a>
<a href="/admin/products">Products</a>
<a href="/admin/orders">Orders</a>
<a href="/admin/customers" class="text-[#E95A8B]">Customers</a>
<a href="/profile">Profile</a>
</div>

</nav>

<section class="px-10 py-10">

<h2 class="text-5xl font-bold">
Customers 👥
</h2>

<p class="text-gray-600 mt-3">
View and manage PetalCart customers.
</p>

</section>

<section class="px-10 pb-10">

<div class="grid md:grid-cols-3 gap-6">

<div class="bg-white rounded-3xl shadow p-6">
<div class="w-16 h-16 rounded-full bg-pink-100 flex items-center justify-center text-2xl mb-4">
👤
</div>
<h3 class="font-bold text-xl">Ean</h3>
<p class="text-gray-500">ean@gmail.com</p>
<p class="mt-3">12 Orders</p>
<p class="text-[#E95A8B] font-semibold">Rp2.150.000 Spent</p>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center text-2xl mb-4">
👤
</div>
<h3 class="font-bold text-xl">Alya</h3>
<p class="text-gray-500">alya@gmail.com</p>
<p class="mt-3">9 Orders</p>
<p class="text-[#E95A8B] font-semibold">Rp1.800.000 Spent</p>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<div class="w-16 h-16 rounded-full bg-pink-100 flex items-center justify-center text-2xl mb-4">
👤
</div>
<h3 class="font-bold text-xl">Nabila</h3>
<p class="text-gray-500">nabila@gmail.com</p>
<p class="mt-3">8 Orders</p>
<p class="text-[#E95A8B] font-semibold">Rp1.650.000 Spent</p>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center text-2xl mb-4">
👤
</div>
<h3 class="font-bold text-xl">Raka</h3>
<p class="text-gray-500">raka@gmail.com</p>
<p class="mt-3">7 Orders</p>
<p class="text-[#E95A8B] font-semibold">Rp1.420.000 Spent</p>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<div class="w-16 h-16 rounded-full bg-pink-100 flex items-center justify-center text-2xl mb-4">
👤
</div>
<h3 class="font-bold text-xl">Salsa</h3>
<p class="text-gray-500">salsa@gmail.com</p>
<p class="mt-3">6 Orders</p>
<p class="text-[#E95A8B] font-semibold">Rp1.200.000 Spent</p>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<div class="w-16 h-16 rounded-full bg-yellow-100 flex items-center justify-center text-2xl mb-4">
👤
</div>
<h3 class="font-bold text-xl">Dinda</h3>
<p class="text-gray-500">dinda@gmail.com</p>
<p class="mt-3">5 Orders</p>
<p class="text-[#E95A8B] font-semibold">Rp950.000 Spent</p>
</div>

</div>

</section>

</body>
</html>
