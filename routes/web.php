<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\FreindsController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::resource('groups', GroupsController::class);

Route::resource('friends', FreindsController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//login with google
Route::get('/google/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('/google/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});


//login with facebook
Route::get('/facebook/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login.facebook');

Route::get('/facebook/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
});
