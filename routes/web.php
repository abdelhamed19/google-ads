<?php

use App\Models\User;
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

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/google/callback', function () {
    $provider_user = Socialite::driver('google')->stateless()->user();

    $user = User::where('provider_id',$provider_user->id)->first();
    dd($provider_user);
    if (!$user)
    {
        User::create([
            'provider_id'=>$provider_user->id,
            'name'=>$provider_user->name,
            'email'=>$provider_user->email,
            'password'=>\Illuminate\Support\Facades\Hash::make('123456789')
        ]);
        return $provider_user->token;
    }
    return $provider_user->token;
});
