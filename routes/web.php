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


Route::get('/', function ($id) {
    echo "Selamat Datang";
});
Route::get('/about', function ($id) {
    echo "1941720224_Muhammad Hajar Priatmaja";
});
Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel dengan ID " . $id ;
});
