<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [PostController::class, 'index']);

// Route untuk reource posts
Route::resource('/posts', PostController::class);

// Route untuk halaman statis
Route::get('/view/{code}', [PostController::class, 'view'])->name('posts.view');
Route::get('/add', [PostController::class, 'add'])->name('posts.add');
Route::get('/edit/{code}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/login', [PostController::class, 'login'])->name('posts.login');
Route::get('/pdf', [PostController::class, 'generatePDF'])->name('posts.pdf');
?>
