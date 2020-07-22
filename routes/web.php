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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
$page='';
Route::get('shop', function(){
    $page='shop';
    return view('Client.shop', compact('page'));
})->name('shop');

Route::get('/', function(){
    $page='home';
    return view('Client.home', compact('page'));
})->name('home');

Route::get('blog', function(){
    $page='blog';
    return view('client.blog', compact('page'));
})->name('blog');

Route::get('about', function(){
    $page='about';
    return view('client.about', compact('page'));
})->name('about');

Route::get('contact', function(){
    $page='contact';
    return view('client.contact', compact('page'));
})->name('contact');

Route::get('readmore', function(){
    $page='service';
    return view('client.services_readmore', compact('page'));
})->name('service.readmore');

Route::get('service', function(){
    $page='service';
    return view('client.services', compact('page'));
})->name('service');
