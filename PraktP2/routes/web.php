<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/product/{angka}',[ProductController::class, 'index']);
Route::get('/product/create',[ProductController::class, 'create']);
Route::post('/product',[ProductController::class, 'store']);
Route::get('/product/{id}',[ProductController::class, 'show']);
Route::get('/product/{id}/edit',[ProductController::class, 'edit']);
Route::get('/product/{id}',[ProductController::class, 'update']);
Route::get('/product/{id}',[ProductController::class, 'destroy']);



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','RoleCheck:users,admin,owner'])->name('dashboard');


Route::get('/uts', function () {
    return view('Uts');
})->middleware(['auth', 'verified','RoleCheck:users,admin,owner'])->name('Uts');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified','RoleCheck:admin,owner'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/route_count/{id}',[ProductController::class, 'show']);
Route::get('/praktikum',[ProductController::class, 'index']);


Route::resource('users', UserController::class);
Route::get('users-trashed', [UserController::class, 'trashed'])->name('users.trashed');
Route::post('users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');
Route::delete('users/{id}/force-delete', [UserController::class, 'forceDelete'])->name('users.forceDelete');


require __DIR__.'/auth.php';
