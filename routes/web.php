<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Backend\OrderController as BackendOrderController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\OrderController;   
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', function (){
    Auth::logout();
    return redirect('/');
});

// Route::get('/', function () {
//     return view('layouts.frontend');
// });

//route member / guest
Route::get('/', [FrontendController::class, 'index']);
Route::get('/product', [FrontendController::class, 'product'])->name('product.index');
Route::get('/product/{product}', [FrontendController::class, 'singleProduct'])
    ->name('product.show');
Route::get('/product/category/{slug}', [FrontendController::class, 'filterByCategory'])
    ->name('product.filter');
Route::get('/search', [FrontendController::class, 'search'])->name('product.search');

Route::get('/about', [FrontendController::class, 'about']);
//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
//orders
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');


// Route::get('/product', [FrontendController::class, 'product']);

//review
Route::Post('/product/{product}/review', [ReviewController::class, 'store'])
    ->middleware('auth')->name('review.store');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//imput middl
//route adimin/ bekend
Route::group(['prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', Admin::class]], function (){
    Route::get('/', [BackendController::class,'index']);
    //crud
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/orders', BackendOrderController::class);
    Route::put('/orders/{id}/status', [BackendOrderController::class, 'updateStatus'])
    ->name('orders.updateStatus');

});