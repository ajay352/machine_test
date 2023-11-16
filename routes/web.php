<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarListingController;

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

Route::get('/',[CarListingController::class,'create'])->name('create');
Route::post('view',[CarListingController::class,'view'])->name('view');
Route::get('/delete/{id}', [CarListingController::class, 'delete'])->name('delete');
Route::get('/display',[CarListingController::class,'display'])->name('display');
Route::get('/update/{id}',[CarListingController::class,'update'])->name('update');
Route::patch('/update_post/{id}',[CarListingController::class,'change'])->name('update_post');
Route::get('/member', [CarListingController::class, 'member'])->name('member');
Route::get('/dashboard', [CarListingController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [CarListingController::class, 'login'])->name('login');
Route::get('/register', [CarListingController::class, 'register'])->name('register');
Route::post('/register_verification',[CarListingController::class,'register_verification'])->name('register_verification');
Route::post('/login_verification',[CarListingController::class,'login_verification'])->name('login_verification');
Route::get('/customdashboard', [CarListingController::class, 'customdashboard'])->name('customdashboard');
Route::get('/logout', [CarListingController::class, 'logout'])->name('logout');




