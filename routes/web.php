<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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