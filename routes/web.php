<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

//Ana Sayfa
Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::redirect('/anasayfa', '/')->name('anasayfa');
//end

//TEST
//parametre olarak sadece sayı göndermek,string gönderirsen hata verir.
//Route::get('/test/{id}', [HomeController::class, 'test'])->where('id','[0-9]+');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
//end

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

//ADMİN ROUTES
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home')->middleware('auth');
//LOGIN ROUTES
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
// ADMİN CATEGOTY ROUTES
Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::get('/', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_home');
    Route::get('category', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/create', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('category/store', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'store'])->name('admin_category_store');
    Route::get('category/edit/{id}', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'delete'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'show'])->name('admin_category_show');

});


//end
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
