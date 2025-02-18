<?php

use App\Livewire\CartPage;
use App\Livewire\HomePage;
use App\Livewire\CheckoutPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductsPage;
use App\Livewire\CategoriesPage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\ProductDetailPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/cart', CartPage::class);
Route::get("/product/{product}", ProductDetailPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('my-orders', MyOrdersPage::class);
Route::get('my-orders/{order}', MyOrderDetailPage::class);
