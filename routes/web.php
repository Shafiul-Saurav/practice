<?php

use App\Http\Controllers\Frondend\HomeController;
use App\Http\Controllers\SingleActionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Admin Route Group
|--------------------------------------------------------------------------
*/

Route::prefix('/')->name('admin.')->group(function () {
    Route::get('', [HomeController::class, 'home'])->name('home');
    Route::get(sha1('about'), [HomeController::class, 'about'])->name('about');
    Route::get(sha1('service'), [HomeController::class, 'service'])->name('service');
    Route::get(sha1('contact'), [HomeController::class, 'contact'])->name('contact');
});

// Route::get('login', function () {
//     return "Login First";
// })->name('login');

Route::get('password', SingleActionController::class);
