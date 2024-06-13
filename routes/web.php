<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;



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
Route::get('/', [MainController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::prefix('/admin')->middleware('auth')->group(function (){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add-profile',[ProfileController::class,'create'])->name('add-profile');
    Route::post('/add-profile',[ProfileController::class,'store'])->name('store-profile');
    Route::get('/delete-profile/${id}', [ProfileController::class, "delete"])->name('delete-profile');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'signin'])->name('signin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


