<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


  // Dashboard pengarah otomatis
Route::get('/dashboard', function () {

    if(auth()->user()->role == 'admin'){
        return redirect('/admin/dashboard');
    }

    return redirect('/customer/dashboard');

})->middleware(['auth'])->name('dashboard');




  // Admin
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

});




  // Customer
Route::middleware(['auth', 'role:customer'])->group(function () {

    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    });

      // Add To Cart
    Route::post('/add-to-cart', function(Request $request){

        $cart = session()->get('cart', []);

        $cart[] = [

            'name'  => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $request->input('image')

        ];

        session()->put('cart', $cart);

        return back();

    });


      // Cart Page
    Route::get('/cart', function(){

        $cart = session('cart', []);

        return view('customer.cart', compact('cart'));

    });


    Route::get('/orders', function () {
        return view('customer.orders');
    });

Route::get('/checkout', function(){

    $cart = session('cart', []);

    return view('customer.checkout',
    compact('cart'));

});
Route::post('/place-order', function(){

    $cart = session('cart', []);

    $orders = session('orders', []);

    foreach($cart as $item){

        $orders[] = [

            'name' => $item['name'],
            'price' => $item['price'],
            'image' => $item['image'],
            'status' => 'On Delivery 🚚'

        ];

    }

    session()->put('orders',$orders);

    session()->forget('cart');

    return redirect('/orders');

});
});




  // Profile
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class,'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class,'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class,'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';