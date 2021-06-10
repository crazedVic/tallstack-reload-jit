<?php

use App\Http\Livewire\Form\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Products;

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

// goes straight to view, code behind doesn't run:
//Route::view('/', 'livewire.home')->name('home');

// pulls the livewire class instead, can use code behind then
Route::get('/', Home::class)->name('home');
Route::get('/products', Products::class)->name('products');
Route::get('/form', Product::class)->name('product-form');
