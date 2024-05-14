<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/products', function () {
    return view('products');
})->middleware('auth');

Route::get('/management', function () {
    $users = \App\Models\User::all();
    return view('management', compact('users'));
})->middleware(['auth', 'role:superadmin']);;
