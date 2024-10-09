<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Ensure the controller exists
// If it doesn't, create it using the following command:
// php artisan make:controller AuthenticatedSessionController

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

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});


// Sanctum CSRF protection for login and register routes
Route::middleware(['web', 'auth:sanctum'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
