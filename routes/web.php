<?php

use App\Http\Controllers\GroupsController;
use App\Http\Controllers\FreindsController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//login with google
Route::get('/google/auth/redirect', function () {
    return Socialite::driver('google')->stateless()->redirect();
})->name('login.google');

Route::get('/auth/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();
    $user = User::where('email', $googleUser->email)->first();
    // dd($googleUser);
    if($user){
        $user->google_id = $googleUser->id;
        $user->google_token = $googleUser->token;
        $user->update();

    }else {
        $user = User::create([
            'name'=>$googleUser->name ? $googleUser->name : $googleUser->email,
            "email"=>$googleUser->email,
            'github_id'=>$googleUser->id,
            'github_token'=>$googleUser->token,
            'github_refresh_token'=>$googleUser->refreshToken ? $googleUser->refreshToken:null
        ]);
    }
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
