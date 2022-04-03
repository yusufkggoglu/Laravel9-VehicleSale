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

//Admin
Route::get('/admin',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');
//end
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
