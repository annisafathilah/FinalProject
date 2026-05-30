<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PetalCart Admin</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#FFF8D6] text-gray-800">

<!-- NAVBAR -->
<nav class="bg-white shadow-md px-8 py-4 flex justify-between items-center">

    <h1 class="text-5xl text-[#E95A8B]"
    style="font-family:'Corinthia',cursive;">
        PetalCart
    </h1>

<div class = "flex gap-8 font-medium">

<a href = "/admin/dashboard">Dashboard</a>

<a href = "/admin/products">Products</a>

<a href = "/admin/orders">Orders</a>

<a href = "/admin/customers">Customers</a>

<a href = "/profile">Profile</a>

</div>

</nav>

<!-- HEADER -->
<section class = "px-10 py-10">

    <h2 class = "text-5xl font-bold">
        Admin Dashboard 🌼
    </h2>

    <p class="text-gray-600 mt-3">
        Welcome back! Here's today's store overview.
    </p>

</section>


<!-- STATS -->
<section class="px-10">

<div class="grid md:grid-cols-4 gap-6">

    <div class="bg-white rounded-3xl shadow p-6">

        <p class="text-gray-500">
            Total Products
        </p>

        <h3 class="text-4xl font-bold mt-2 text-[#E95A8B]">
            12
        </h3>

    </div>

    <div class="bg-white rounded-3xl shadow p-6">

        <p class="text-gray-500">
            Total Orders
        </p>

        <h3 class="text-4xl font-bold mt-2 text-[#F4B942]">
            56
        </h3>

    </div>

    <div class="bg-white rounded-3xl shadow p-6">

        <p class="text-gray-500">
            Customers
        </p>

        <h3 class="text-4xl font-bold mt-2 text-[#E95A8B]">
            34
        </h3>

    </div>

    <div class="bg-white rounded-3xl shadow p-6">

        <p class="text-gray-500">
            Revenue
        </p>

        <h3 class="text-4xl font-bold mt-2 text-[#F4B942]">
            Rp 8.2M
        </h3>

    </div>

</div>

</section>


<!-- QUICK ACTION -->
<section class="px-10 py-10">

<h3 class="text-3xl font-bold mb-6">
    Quick Actions ✨
</h3>

<div class="grid md:grid-cols-3 gap-6">

    <div class="bg-[#FFE6EE] rounded-3xl p-8 shadow">

        <h4 class="text-2xl font-bold">
            Add Product
        </h4>

        <p class="mt-2 text-gray-600">
            Create new flower products.
        </p>

        <button class="mt-5 bg-[#E95A8B] text-white px-5 py-2 rounded-xl">
            Open
        </button>

    </div>


    <div class="bg-[#FFF1C7] rounded-3xl p-8 shadow">

        <h4 class="text-2xl font-bold">
            View Orders
        </h4>

        <p class="mt-2 text-gray-600">
            Manage incoming orders.
        </p>

        <button class="mt-5 bg-[#F4B942] text-white px-5 py-2 rounded-xl">
            Open
        </button>

    </div>


    <div class="bg-[#FFF5D9] rounded-3xl p-8 shadow">

        <h4 class="text-2xl font-bold">
            Customer List
        </h4>

        <p class="mt-2 text-gray-600">
            Monitor customer activity.
        </p>

        <button class="mt-5 bg-[#E95A8B] text-white px-5 py-2 rounded-xl">
            Open
        </button>

    </div>

</div>

</section>


<!-- RECENT ORDERS -->
<section class="px-10 pb-10">

<h3 class="text-3xl font-bold mb-6">
    Recent Orders 📦
</h3>

<div class="bg-white rounded-3xl shadow overflow-hidden">

<table class="w-full">

<thead class="bg-[#FFF1C7]">

<tr>

<th class="p-4 text-left">
Order ID
</th>

<th class="p-4 text-left">
Customer
</th>

<th class="p-4 text-left">
Product
</th>

<th class="p-4 text-left">
Status
</th>

</tr>

</thead>

<tbody>

<tr class="border-t">

<td class="p-4">
#PT001
</td>

<td class="p-4">
Ean
</td>

<td class="p-4">
Peony Bouquet
</td>

<td class="p-4">

<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
Processing
</span>

</td>

</tr>

<tr class="border-t">

<td class="p-4">
#PT002
</td>

<td class="p-4">
Alya
</td>

<td class="p-4">
Baby Breath
</td>

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