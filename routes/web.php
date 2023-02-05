<?php

use App\Http\Controllers\ProductsController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', fn () => (auth()->check()) ? redirect('home') : view('welcome'))->name("welcome");

Auth::routes();

Route::get('/delete-account', function () {
  User::query()->where("id", "=", auth()->id())->delete();
  return redirect()->route('welcome');
})->name('delete-account');
Route::post('/products/search/', [ProductsController::class, 'search'])->name('products.search');
Route::resource('products', ProductsController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
