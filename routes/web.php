<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::name('welcome')->get('/', function () {
    return view('welcome');
});

Route::get('produits', [ProductController::class, 'index'])->name('produits');
Route::get('produits/{slug}', [ProductController::class, 'show'])->name('produits.show');
Route::get('/search', [ProductController::class, 'search'])->name('produits.search');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
