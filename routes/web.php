<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Dashboard;
use App\Livewire\EditProduct;
use App\Livewire\Orderlist;
use App\Livewire\Product;
use App\Livewire\Salehistory;
use App\Livewire\Viewproduct;
use Illuminate\Support\Facades\Route;


Route::get('/',Dashboard::class)->name('dashboard');
Route::get('/product',Product::class)->name('product');
Route::get('view_product',Viewproduct::class)->name('view_product');
Route::get('orderlist',Orderlist::class)->name('orderlist');
Route::get('sell',Salehistory::class)->name('sell');
Route::post('/product',[ProductController::class,'store'])->name('store');
Route::get('/edit/{id}',[EditProduct::class,'edit'])->name('edit');
Route::post('/edit/{id}',[EditProduct::class,'update'])->name('update');
Route::get('/delete/{id}',[EditProduct::class,'delete'])->name('delete');


