<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventImageController;
use App\Http\Controllers\GalleryImageController;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SectionController;

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
    $data = \App\Models\Section::where('page','home')->get();
    return view('home')->with('data', $data);
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

    $january = Event::where('month','january')->get();
    $february = Event::where('month','february')->get();
    $march = Event::where('month','march')->get();
    $april = Event::where('month','april')->get();
    $may = Event::where('month','may')->get();
    $june = Event::where('month','june')->get();
    $july = Event::where('month','july')->get();
    $august = Event::where('month','august')->get();
    $september = Event::where('month','september')->get();
    $october = Event::where('month','october')->get();
    $november = Event::where('month','november')->get();
    $december = Event::where('month','december')->get();
    $eventimage = EventImage::orderBy('created_at', 'ASC')->first();

    return view('members', [
        'january' => $january,
        'february' => $february,
        'march' => $march,
        'april' => $april,
        'may' => $may,
        'june' => $june,
        'july' => $july,
        'august' => $august,
        'september' => $september,
        'october' => $october,
        'november' => $november,
        'december' => $december,
        'eventimage' => $eventimage,


    ]);
});
Route::get('/gallery', function () {
    $gallery = GalleryImage::orderBy('order', 'ASC')->get();
    return view('gallery', ['gallery' => $gallery]);
});


Route::resource('sections', SectionController::class);
Route::resource('events', EventController::class);
Route::resource('galleryimages', GalleryImageController::class);
Route::resource('eventimage', EventImageController::class);

Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
