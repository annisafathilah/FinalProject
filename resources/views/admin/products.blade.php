<!DOCTYPE html>

<html lang = "en">
<head>
<meta charset = "UTF-8">
<meta name    = "viewport" content = "width=device-width, initial-scale=1.0">

<title>PetalCart Products</title>

@vite(['resources/css/app.css','resources/js/app.js'])

<link rel  = "preconnect" href                                                              = "https://fonts.googleapis.com">
<link href = "https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel = "stylesheet">

</head>

<body class = "bg-[#FFF8D6] text-gray-800">

@php

$products = [

['name'=>'Anemone','price'=>'150.000','stock'=>25,'sold'=>12,'image'=>'Anemone.jpg'],
['name'=>'Baby Breath','price'=>'175.000','stock'=>30,'sold'=>98,'image'=>'babyb.jpg'],
['name'=>'Peony','price'=>'160.000','stock'=>28,'sold'=>87,'image'=>'peony.jpg'],
['name'=>'Red Rose','price'=>'145.000','stock'=>35,'sold'=>80,'image'=>'redrose.jpg'],
['name'=>'Orchid','price'=>'180.000','stock'=>15,'sold'=>77,'image'=>'orchid.jpg'],
['name'=>'Sunflower','price'=>'200.000','stock'=>10,'sold'=>74,'image'=>'matahari.jpg'],
['name'=>'Lily','price'=>'165.000','stock'=>22,'sold'=>70,'image'=>'lily.jpg'],
['name'=>'Daisy','price'=>'130.000','stock'=>40,'sold'=>65,'image'=>'daisy.jpg'],
['name'=>'Chrysanthemum','price'=>'185.000','stock'=>18,'sold'=>60,'image'=>'Chrysanthemum.jpg'],
['name'=>'Hydrangea','price'=>'210.000','stock'=>8,'sold'=>58,'image'=>'hydrangea.jpg']

];

@endphp

<nav class = "bg-white shadow-md px-8 py-4 flex justify-between items-center">

<h1 class = "text-5xl text-[#E95A8B]"
    style = "font-family:'Corinthia',cursive;">
PetalCart
</h1>

<div class = "flex gap-8 font-medium">

<a href = "/admin/dashboard">Dashboard</a> <a href = "/admin/products" class = "text-[#E95A8B]">Products</a> <a href = "/admin/orders">Orders</a> <a href = "/admin/customers">Customers</a> <a href = "/profile">Profile</a>

</div>

</nav>

<section class = "px-10 py-10">

<div class = "flex justify-between items-center mb-8">

<div>

<h2 class = "text-5xl font-bold">
Products 🌷
</h2>

<p class = "text-gray-600 mt-2">
Manage all flower products available in PetalCart.
</p>

</div>

<button class = "bg-[#E95A8B] text-white px-6 py-3 rounded-xl shadow">
+ Add Product
</button>

</div>

<div class = "grid md:grid-cols-2 lg:grid-cols-5 gap-6">

@foreach($products as $product)

<div class = "bg-white rounded-3xl shadow overflow-hidden hover:-translate-y-1 duration-300">

<img
src   = "{{ asset('images/'.$product['image']) }}"
class = "h-48 w-full object-cover">

<div class = "p-4">

<h3 class = "font-bold text-lg">
{{ $product['name'] }}
</h3>

<p class = "text-[#E95A8B] font-semibold mt-1">
Rp {{ $product['price'] }}
</p>

<p class = "text-sm text-gray-500 mt-2">
Stock: {{ $product['stock'] }}
</p>

<p class = "text-sm text-gray-500">
Sold: {{ $product['sold'] }}
</p>

<div class = "flex gap-2 mt-4">

<button class = "flex-1 bg-[#F4B942] text-white py-2 rounded-xl">
Edit
</button>

<button class = "flex-1 bg-[#E95A8B] text-white py-2 rounded-xl">
Delete
</button>

</div>

</div>

</div>

@endforeach

</div>

</section>

</body>
</html>
