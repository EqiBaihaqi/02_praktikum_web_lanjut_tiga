<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

// No 1
Route::get('/', function () {
    echo ('Menampilkan halaman home');
});

// No 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Menampilkan halaman Marbel Edu Games";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo "Menampilkan halaman Marbel and Friends Kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Menampilkan halaman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Menampilkan halaman Kolak Kids Songs";
    });
});

//Number 3
Route::get('/news/{title?}', function ($title = null) {
    echo $title;
});

//Number 4
Route::prefix('/program')->group (function () {
    Route::get('/karir', function () {
        echo "Menampilkan halaman program karir";
    });
    Route::get('/magang', function () {
        echo "Menampilkan halaman program magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Menampilkan halaman program kunjungan industri";
    });
});

//Number 5
Route::get('/about', function () {
    echo ('Menampilkan halaman About Us');
});

//Number 6
Route::resource('contact', PageController::class)->only([
    'index'
]);
