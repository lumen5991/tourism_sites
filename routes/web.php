<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use App\Http\Controllers\UserController;

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

// Passport routes
Route::group(['prefix' => 'oauth'], function () {
    Route::post('/token', [AccessTokenController::class, 'issueToken']);
});

// Routes for user authentication
Route::group(['prefix' => 'auth'], function () {
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register'])->name('register.post');
    Route::get('/login', function () {
        return view('users.login');
    })->name('login');
    Route::post('/login', [UserController::class, 'login'])->name('login.post');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route pour récupérer tous les utilisateurs
    Route::get('/admin/listuser', [UserController::class, 'getAllUsers'])->name('getAllUsers');
});



Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');

Route::view('/events', 'events.events')->name('events');
Route::view('/detailsEvents', 'events.detailsEvents')->name('detailsEvents');
Route::view('/addEvent', 'events.addEvent')->name('addEvent');

/* Route::view('/register', 'users.register')->name('register');
Route::view('/login', 'users.login')->name('login'); */

Route::view('/sites', 'sites.sites')->name('sites');
Route::view('/detailsSites', 'sites.detailsSites')->name('detailsSites');

Route::view('/infosGuide', 'guides.infosGuide')->name('infosGuide');
Route::view('/guide', 'guides.guide')->name('guide');

Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/destination', 'destination')->name('destination');
Route::view('/testimonial', 'testimonial')->name('testimonial');

Route::view('/admin/listuser', 'admin.listUser')->name('listUser');
