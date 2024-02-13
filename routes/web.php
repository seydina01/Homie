<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/
Route::resource('/', homeController::class)->names('welcome');
Route::resource('properties', propertyController::class)->names('properties');
Route::get('/rent', [homecontroller::class, 'rent'])->name('rent');
Route::get('/all', [homecontroller::class, 'all'])->name('all');
Route::resource('cities', cityController::class)->names('cities');
Route::resource('categories', categoryController::class)->names('categories');



Route::get('/vendre', function () {
    return view('properties/vendre');
})->name('vendre');
Route::get('/show', function () {
    return view('properties/show');
});
//Route::get('/property', [propertyController::class, 'index']);



Route::get('/logintest', function () {
    return view('properties/login');
})->name('logintest');
Route::get('/registertest', function () {
    return view('properties/register');
})->name('registertest');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
