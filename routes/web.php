<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'pages.index')->name('index');
Route::view('/about-us', 'pages.about-us')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/services', 'pages.services')->name('service');
Route::view('/demo', 'pages.demo');

Route::view('/demo', 'pages.demo');
Route::post('track/shipment', "ShipmentController@trackShipment")->name('trackShipment');


include 'admin.php';

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

});
