<?php

use Illuminate\Support\Facades\Route;

Route::view('/home', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/teams', 'pages.teams')->name('teams');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/service', 'pages.service')->name('service');
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/home', function () {
//     return view('pages.home');
// });
// Route::get('/teams', function () {
//     return view('pages.teams');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/service', function () {
//     return view('pages.service');
// });
Route::get('/service/products',  'ProductController@show')->name('service/products');


