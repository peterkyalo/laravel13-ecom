<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeComtroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeComtroller::class, 'index'])->name('home.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware([AuthAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/brands', [AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/admin/brands/create', [AdminController::class, 'addBrand'])->name('admin.brands.add');
});

// User Routes


require __DIR__.'/auth.php';