<?php

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


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('tweets.index');
    Route::post('/tweets', 'TweetsController@store')->name('tweets.store');

    Route::get('/profiles/{user}', 'ProfileController@show')->name('profile.show');

    Route::post('/profiles/{user}/follow', 'FollowsController@store')->name('follow');

    Route::get('/profiles/{user}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::patch('/profiles/{user}', 'ProfileController@update')->name('profile.update');


    Route::get('/explore', 'ExploreController')->name('explore.index');

});

Auth::routes();
