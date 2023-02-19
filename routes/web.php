<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\FreindsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

Route::resource('orders', OrderController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//login with google
Route::get('/google/auth/redirect', function () {
    return Socialite::driver('google')->stateless()->redirect();
})->name('login.google');

Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();
    // dd($googleUser->email);
    //$user = User::where('email', $googleUser->email)->first();

    $user = User::updateOrCreate([
        'google_id' => $googleUser->id,
    ], [
        'name' => $googleUser->name,
        'email' => $googleUser->email,
        'remember_token' => $googleUser->token,
        // 'github_refresh_token' => $googleUser->refreshToken,
        'password'=>'',
        'google_id'=>$googleUser->id

    ]);
    // dd($user);
        Auth::login($user);
        return redirect('/home');

    // $user->token
});


//login with facebook
Route::get('/facebook/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('login.facebook');

Route::get('/facebook/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();
    dd($user);

    // $user->token
});
