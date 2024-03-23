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

Route::view('/register', 'users.register')->name('register');
Route::view('/login', 'users.login')->name('login');

Route::view('/sites', 'sites.sites')->name('sites');
Route::view('/detailsSites', 'sites.detailsSites')->name('detailsSites');

Route::view('/infosGuide', 'guides.infosGuide')->name('infosGuide');
Route::view('/guide', 'guides.guide')->name('guide');

Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');
Route::view('/destination', 'destination')->name('destination');
Route::view('/testimonial', 'testimonial')->name('testimonial');

