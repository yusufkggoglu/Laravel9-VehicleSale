<?php

use App\Http\Controllers\AdminPanel\AdminCarController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

//**************************HOME PAGE ROUTES*******************************
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::redirect('/anasayfa', '/')->name('anasayfa');
Route::get('/car/{id}', [HomeController::class, 'car'])->name('car');
Route::get('/categorycars/{id}/{slug}', [HomeController::class, 'categorycars'])->name('categorycars');
//**************************GENERAL ROUTES*******************************
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



//**********************ADMİN PANEL ROUTES****************************
Route::prefix('admin')->name('admin_')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home')->middleware('auth');

    //*************************GENERAL ROUTES****************************
    Route::get('/login', [AdminHomeController::class, 'login'])->name('login');
    Route::post('/logincheck', [AdminHomeController::class, 'logincheck'])->name('logincheck');
    Route::get('/logout', [AdminHomeController::class, 'logout'])->name('logout');
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting/update', [AdminHomeController::class, 'settingsUpdate'])->name('setting_update');


    //****************ADMİN CATEGORY ROUTES*****************************
    Route::prefix('category')->name('category_')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
    });

    //****************ADMİN CAR ROUTES*****************************
    Route::prefix('car')->name('car_')->controller(AdminCarController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::get('/show/{id}', 'show')->name('show');
    });
    //****************ADMİN CAR IMAGE GALLERY ROUTES*****************************
    Route::prefix('image')->name('image_')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/delete/{pid}/{id}', 'destroy')->name('delete');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
