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

Route::redirect('/', '/home');

Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify' => true]);

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/donate', 'DonationController@index')->name('donate');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/contact', 'HomeController@contact')->name('contact')->middleware('auth');

Route::post('/contact', 'HomeController@store')->name('contact.store')->middleware('auth');

Route::get('/volunteer', 'HomeController@main')->name('volunteer.main');

Route::get('/volunteer/register', 'HomeController@sign')->name('volunteer.sign')->middleware('auth');

Route::post('/volunteer/register', 'VolunteerController@register')->name('volunteer.register')->middleware('auth');

Route::get('/blog', "BlogController@index")->name('blog.all');

Route::get('/blog/{id}', 'BlogController@detail')->name('blog.detail');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

