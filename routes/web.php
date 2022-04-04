<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false]);

Route::get('logout', function () {
    return Auth::logout();
})->name('logout');



// route dành cho user home. blog. product. introduct

Route::name('user.')->group(function () {
    Route::get('/', function () {
        return view('user.home');
    })->name('home');
});
