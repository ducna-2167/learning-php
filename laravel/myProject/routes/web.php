<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\MapsController;



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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');
Route::get('events/category/{category}/{subcategory?}', [EventsController::class, 'category']);
Route::get('events', [EventsController::class, 'index']);

Route::view('about', 'about.index')->name('about.index');
Route::view('about/book', 'about.book')->name('about.book');

Route::view('contact', 'contact.index')->name('contact.index');

Route::get('languages', [LanguagesController::class, 'index'])->name('languages.index');

Route::get('locations', [LocationsController::class, 'index'])->name('locations.index');
Route::get('maps', [MapsController::class, 'index'])->name('maps.index');
