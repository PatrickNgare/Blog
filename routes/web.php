<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\post\PostModel;
use App\Http\Controllers\categories\CategoriesController;
// Root route
/* Route::get('/', function () {
    return view('home'); // Serve the home view for the root URL
})->name('root');
 */
// Authentication routes
Auth::routes();
Route::get('/', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('welcome');
// Authenticated home route
Route::get('/home', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('home');
Route::get('/posts/index', [App\Http\Controllers\posts\PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/single/{id}', [App\Http\Controllers\posts\PostsController::class, 'single'])->name('posts.single');
Route::post('/posts/comment-store', [App\Http\Controllers\posts\PostsController::class, 'storeComment'])->name('comment.store');
Route::get('/posts/create-post', [App\Http\Controllers\posts\PostsController::class, 'createPost'])->name('posts.create');
Route::post('/posts/post-store', [App\Http\Controllers\posts\PostsController::class, 'storePost'])->name('posts.store');
Route::get('/posts/post-delete/{id}', [App\Http\Controllers\posts\PostsController::class, 'deletePost'])->name('posts.delete');

//edit post
Route::get('/posts/post-edit/{id}', [App\Http\Controllers\posts\PostsController::class, 'editPost'])->name('posts.edit');

//update post
Route::post('/posts/post-update/{id}', [App\Http\Controllers\posts\PostsController::class, 'updatePost'])->name('posts.update')->middleware('auth');

//search post

Route::any('/posts/search', [App\Http\Controllers\posts\PostsController::class, 'search'])->name('posts.search');

Route::get('/contact', [App\Http\Controllers\posts\PostsController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\posts\PostsController::class, 'about'])->name('about');

Route::get('/posts/category/{name}', [App\Http\Controllers\categories\CategoriesController::class, 'category'])->name('category.single');

//update profile
Route::get('/users/edit/{id}', [App\Http\Controllers\users\UsersController::class, 'editProfile'])->name('users.edit');
Route::put('/users/update/{id}', [App\Http\Controllers\Users\UsersController::class, 'updateProfile'])->name('update.user');
Route::get('/users/profile{id}', [App\Http\Controllers\users\UsersController::class, 'profile'])->name('users.profile');

Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewlogin'])->name('admin.login');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewlogin'])->name('admin.login');
