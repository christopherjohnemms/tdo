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

Route::get('/', function () {
    return view('home');
});

Route::get('/tigers', function () {
    return view('tigers');
});

Route::get('/starting', function () {
    return view('starting');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/instructor', function () {
    return view('instructor');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/members', function () {
    return view('members');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
