<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;


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

Auth::routes(['reset' => false, 'verify' => false,]);



// dashboard post
Route::get('/', [DashboardController::class, 'index'])->name('dashboard.post.index');

Route::get('/dashboard/{post}', [DashboardController::class, 'show'])->name('dashboard.post.show');



// Admin
Route::get('/admin/post', [PostController::class, 'index'])->middleware('auth')->name('admin.post.index');

Route::get('/admin/post/create', [PostController::class, 'create'])->middleware('auth')->name('admin.post.create');

Route::post('/admin/post', [PostController::class, 'store'])->middleware('auth')->name('admin.post.store');

Route::get('/admin/{post}', [PostController::class, 'show'])->middleware('auth')->name('admin.post.show');

Route::get('/admin/{post}/edit', [PostController::class, 'edit'])->middleware('auth')->name('admin.post.edit');

Route::patch('/admin/{post}', [PostController::class, 'update'])->middleware('auth')->name('admin.post.update');

Route::delete('/admin/{post}', [PostController::class, 'destroy'])->middleware('auth')->name('admin.post.destroy');

