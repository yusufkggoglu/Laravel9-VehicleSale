<?php

use App\Http\Controllers\AdminPanel\AdminCarController;
use App\Http\Controllers\AdminPanel\AdminHomeController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\BrandController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserCarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserImageController;
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
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');


//**********************LOGİN LOGOUT PANEL ROUTES****************************
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::post('/loginadmincheck', [HomeController:: class, 'loginadmincheck'])->name('loginadmincheck');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//**********************USER AUTH  CONTROL****************************

Route::middleware('auth')->group(function () {

    //**********************USER PANEL ROUTES****************************
    Route::get('/user/posting', [UserCarController::class, 'index'])->name('user_car_posting');
    Route::get('/user/car/create', [UserCarController::class, 'create'])->name('user_car_create');
    Route::post('/user/car/store', [UserCarController::class, 'store'])->name('user_car_store');

    Route::get('/user/car/edit/{id}', [UserCarController::class,'edit'])->name('user_car_edit');
    Route::post('/user/car/update/{id}',[UserCarController::class, 'update'])->name('user_car_update');
    Route::get('/user/car/delete/{id}',[UserCarController::class, 'destroy'])->name('user_car_delete');
    Route::get('/user/car/show/{id}',[UserCarController::class, 'show'])->name('user_car_show');
    //****************USER CAR IMAGE GALLERY ROUTES*****************************
    Route::prefix('userpanel')->name('userpanel_')->group(function () {

        //**********************USER PANEL IMAGE GALLERY ROUTES****************************
        Route::prefix('image')->name('image_')->controller(UserImageController::class)->group(function () {
            Route::get('/{pid}', 'index')->name('index');
            Route::post('/store/{pid}', 'store')->name('store');
            Route::get('/delete/{pid}/{id}', 'destroy')->name('delete');
        });
    });


    Route::prefix('userpanel')->name('userpanel_')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('review_destroy');


    });

//**********************ADMİN PANEL ROUTES****************************
    Route::middleware('admin')->prefix('admin')->name('admin_')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('home');

        //*************************GENERAL ROUTES****************************
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting/update', [AdminHomeController::class, 'settingsUpdate'])->name('setting_update');

        //****************ADMİN BRAND ROUTES*****************************
        Route::prefix('brand')->name('brand_')->controller(BrandController::class)->group(function () {
            Route::get('/', 'index')->name('home');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/show/{id}', 'show')->name('show');
        });


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
            Route::post('/updatestatus/{id}', 'updatestatus')->name('updatestatus');

        });
        //****************ADMİN CAR IMAGE GALLERY ROUTES*****************************
        Route::prefix('image')->name('image_')->controller(ImageController::class)->group(function () {
            Route::get('/{pid}', 'index')->name('index');
            Route::post('/store/{pid}', 'store')->name('store');
            Route::get('/delete/{pid}/{id}', 'destroy')->name('delete');
        });

        //****************ADMİN MESSAGE ROUTES*****************************
        Route::prefix('message')->name('message_')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/store/', 'store')->name('store');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
        });

        //ADMIN COMMENT ROUTES
        Route::prefix('/comment')->name('comment_')->controller(CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
        });

        //****************ADMİN FAQ ROUTES*****************************
        Route::prefix('faq')->name('faq_')->controller(FaqController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/show/{id}', 'show')->name('show');
        });

        //****************ADMİN USER ROUTES*****************************
        Route::prefix('user')->name('user_')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        });
    });

});



