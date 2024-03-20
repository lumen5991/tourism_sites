<?php

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

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');

Route::view('/events', 'events.events')->name('events');
Route::view('/detailsEvents', 'events.detailsEvents')->name('detailsEvents');
Route::view('/addEvent', 'events.addEvent')->name('addEvent');

Route::view('/sites', 'sites')->name('sites');
Route::view('/detailsSites', 'detailsSites')->name('detailsSites');
Route::view('/infosGuide', 'infosGuide')->name('infosGuide');
Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');

Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/destination', 'destination')->name('destination');
Route::view('/guide', 'guide')->name('guide');
Route::view('/testimonial', 'testimonial')->name('testimonial');

Route::view('/dashboardAdmin', 'dashboardAdmin')->name('dashboardAdmin');
