<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
//Route::get('/posts', [App\Http\Controllers\HomeController::class, 'index'])->name('posts');

Route::get('/posts', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/post/{param}', [App\Http\Controllers\FrontendController::class, 'show'])->name('show');
//Route::get('/post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');
Route::get('/home', function(){
	return view ('home');
})->middleware('auth') ;
Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');

Route::get('/admin/posts', [App\Http\Controllers\Admin\PostsController::class, 'index'])->name('admin.posts');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostsController::class, 'store'])->name('admin.posts.store');
Route::post('/admin/posts/{postId}/update', [App\Http\Controllers\Admin\PostsController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{postId}/delete', [App\Http\Controllers\Admin\PostsController::class, 'delete'])->name('admin.posts.delete');


Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/about', function () {
    return view ('about');
})->name('about');

Auth::routes();
