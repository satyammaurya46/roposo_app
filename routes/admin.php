<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogCategoriesController;
use App\Http\Controllers\Admin\BlogCreateController;
use App\Http\Controllers\Admin\CheckTagController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\TokenController;
use App\Models\AdminBlogTag;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['is_admin'])->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

Route::get('admin/', function () {
    return view('welcome');
});

// Route::get('generate-token', [TokenController::class, 'index']);

// Grouping admin routes with 'is_admin' middleware
Route::get('/', function () {
    return view('admin.Auth.login');
});

Route::group(['as' => 'auth.', 'prefix' => 'auth'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login-process', [LoginController::class, 'storelogin'])->name('login.process');
    Route::get('recoverpw', [LoginController::class, 'recoverpw'])->name('recoverpw');
    Route::get('register', [LoginController::class, 'register'])->name('register');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});


Route::middleware(['is_admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // blog tag
    Route::get('create-blog', [AdminBlogController::class, 'create'])->name('create.blog');
    Route::get('list-blog', [AdminBlogController::class, 'index'])->name('list.blog');
    Route::post('store-blog', [AdminBlogController::class, 'store'])->name('store.blog');
    Route::get('edit-blog/{id}', [AdminBlogController::class, 'edit'])->name('edit.blog');
    Route::put('update-blog/{id}', [AdminBlogController::class, 'update'])->name('update.blog');
    Route::delete('destroy-blog/{id}', [AdminBlogController::class, 'destroy'])->name('destroy.blog');
    Route::get('blog-view/{id}', [AdminBlogController::class, 'view'])->name('blog.admin.view');

    // tag name check
    Route::post('/check-name-exists', [AdminBlogController::class, 'checkNameExists'])->name('check.name.exists');
    Route::post('/check-slug-exists', [AdminBlogController::class, 'checkSlugExists'])->name('check.slug.exists');

    // Create Blog
    Route::get('blogsCreate-list', [BlogCreateController::class, 'index'])->name('blogsCreate.list');
    Route::get('blogCreate-create', [BlogCreateController::class, 'create'])->name('blogCreate.create');
    Route::post('blogCreate-store', [BlogCreateController::class, 'store'])->name('blogCreate.store');





    // Category Routes
    Route::get('categories', [BlogCategoriesController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [BlogCategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [BlogCategoriesController::class, 'store'])->name('categories.store');

    // Check if category name exists (AJAX)
    Route::get('categories/checkName', [BlogCategoriesController::class, 'checkName'])->name('categories.checkName');

    // Edit Category
    Route::get('categories-edit/{id}', [BlogCategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('categories-update/{id}', [BlogCategoriesController::class, 'update'])->name('categories.update');

    // Delete Category
    Route::delete('categories/{categorys}', [BlogCategoriesController::class, 'destroy'])->name('categories.destroy');

    Route::post('/blog-categories/toggle-status', [BlogCategoriesController::class, 'toggleStatus'])
        ->name('blogCategories.toggleStatus');
});
