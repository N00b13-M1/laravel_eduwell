<?php

use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Title;

Route::get('/', function () {
    $services = Service::all();
    $titles = Title::all();
    $testimonials = Testimonial::all();
    return view('welcome', compact('services', 'titles', 'testimonials'));
});

// Route::get('/foo', '\App\http\Controllers\RoleController@foo',);
// Route::get('/bar', '\App\http\Controllers\RoleController@bar',);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/back', function(){
        return 'Bonjour Admin';
    });
});



require __DIR__.'/auth.php';
