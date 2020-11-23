<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    return view('home', compact('brands','abouts'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('user/logout', [AdminController::class, 'logout'])->name('user.logout');

//brand
Route::get('/brand/all', [BrandController::class, 'index'])->name('all.brand');

Route::post('/brand/store', [BrandController::class, 'store'])->name('store.brand');

Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');

Route::post('/brand/update/{id}', [BrandController::class, 'update'])->name('brand.update');

Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->name('brand.delete');


// admin routes
Route::get('home/slider', [HomeController::class, 'homeslider'])->name('home.slider');

Route::get('add/slider', [HomeController::class, 'addslider'])->name('add.slider');

Route::Post('store/slider', [HomeController::class, 'storeslider'])->name('store.slider');

Route::get('slider/delete/{id}', [HomeController::class, 'deleteslider'])->name('slider.delete');

Route::get('slider/edit/{id}', [HomeController::class, 'editlider'])->name('slider.edit');

Route::post('slider/update/{id}', [HomeController::class, 'updateslider'])->name('slider.update');




//about
Route::get('/home/about', [AboutController::class, 'index'])->name('home.about');

Route::get('/about/create', [AboutController::class, 'addabout'])->name('add.about');

Route::Post('about/store', [AboutController::class, 'storeslider'])->name('store.about');

Route::get('/about/edit/{id}', [AboutController::class, 'editabout'])->name('about.edit');

Route::post('/about/update/{id}', [AboutController::class, 'updateabout'])->name('about.update');

Route::get('/about/delete/{id}', [AboutController::class, 'deleteabout'])->name('about.delete');
