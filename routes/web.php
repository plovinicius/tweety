<?php

use App\Http\Controllers;
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

Route::get('/', function() {
    return view('auth.login');
})->middleware('guest');

Route::middleware('auth')->group(function() {
    Route::get('/tweets', [Controllers\TweetController::class, 'index'])->name('home');
    Route::post('/tweets', [Controllers\TweetController::class, 'store']);

    Route::post('/profiles/{user}/follow', [Controllers\FollowController::class, 'store']);

    Route::get('/profiles/{user}/edit', [Controllers\ProfileController::class, 'edit'])
        ->middleware('can:edit,user');

    Route::patch('/profiles/{user}', [Controllers\ProfileController::class, 'update'])
        ->middleware('can:edit,user');

    Route::get('/profiles/{user}', [Controllers\ProfileController::class, 'show'])->name('profile');

    Route::get('/explore', [Controllers\ExploreController::class, 'index'])->name('explore');
});

Auth::routes();
