<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\PreferController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\MessagesController;

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


// Auth::routes();

//  Route::get('/home', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');

// Auth::routes();
// //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('destination', DestinationController::class);

Route::resource('news', NewsController::class);

Route::resource('offers', OffersController::class);

Route::resource('profile', ProfileController::class);

Route::resource('visit', VisitController::class);

Route::resource('prefer', PreferController::class);

Route::resource('plan', PlanController::class);

Route::resource('messages', MessagesController::class);

Route::resource('search', SearchController::class);


Route::post('newsletter', [App\Http\Controllers\NewsletterController::class, 'store'])->name('newsletter.store');

