<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PetalCart Orders</title>

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
<a href="/admin/orders" class="text-[#E95A8B]">Orders</a>
<a href="/admin/customers">Customers</a>
<a href="/profile">Profile</a>
</div>

</nav>

<section class="px-10 py-10">

<h2 class="text-5xl font-bold">
Orders 📦
</h2>

<p class="text-gray-600 mt-3">
Manage customer orders and delivery status.
</p>

</section>

<section class="px-10">

<div class="grid md:grid-cols-3 gap-6 mb-10">

<div class="bg-white rounded-3xl shadow p-6">
<p class="text-gray-500">Total Orders</p>
<h3 class="text-4xl font-bold text-[#E95A8B] mt-2">56</h3>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<p class="text-gray-500">Processing</p>
<h3 class="text-4xl font-bold text-[#F4B942] mt-2">18</h3>
</div>

<div class="bg-white rounded-3xl shadow p-6">
<p class="text-gray-500">Completed</p>
<h3 class="text-4xl font-bold text-green-500 mt-2">38</h3>
</div>

</div>

<div class="bg-white rounded-3xl shadow overflow-hidden">

<table class="w-full">

<thead class="bg-[#FFF1C7]">

<tr>
<th class="p-4 text-left">Order ID</th>
<th class="p-4 text-left">Customer</th>
<th class="p-4 text-left">Product</th>
<th class="p-4 text-left">Total</th>
<th class="p-4 text-left">Status</th>
</tr>

</thead>

<tbody>

<tr class="border-t">
<td class="p-4">#PT001</td>
<td class="p-4">Ean</td>
<td class="p-4">Peony Bouquet</td>
<td class="p-4">Rp160.000</td>
<td class="p-4">
<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
Processing
</span>
</td>
</tr>

<tr class="border-t">
<td class="p-4">#PT002</td>
<td class="p-4">Alya</td>
<td class="p-4">Baby Breath</td>
<td class="p-4">Rp175.000</td>
<td class="p-4">
<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
Completed
</span>
</td>
</tr>

<tr class="border-t">
<td class="p-4">#PT003</td>
<td class="p-4">Nabila</td>
<td class="p-4">Orchid</td>
<td class="p-4">Rp180.000</td>
<td class="p-4">
<span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
Shipping
</span>
</td>
</tr>

<tr class="border-t">
<td class="p-4">#PT004</td>
<td class="p-4">Raka</td>
<td class="p-4">Tulip</td>
<td class="p-4">Rp195.000</td>
<td class="p-4">
<span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
Completed
</span>
</td>
</tr>

</tbody>

</table>

</div>

</section>

</body>
</html>
