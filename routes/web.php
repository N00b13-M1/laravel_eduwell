<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleController;
use App\Models\Contact;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;



Route::get('/', function () {
    $services = Service::all();
    $titles = Title::all();
    $testimonials = Testimonial::all();
    $contact = Contact::all();
    return view('welcome', compact('services', 'titles', 'testimonials', 'contact'));
})->name('welcome.index');

Route::middleware(['auth', 'role:admin'])->group(function(){
    // $lien = '/back';
    Route::get('/back', function(){
        $users = User::all();
        return view('back.pages.back', compact('users'));
    })->name('back.index');

    Route::resource("back/testimonials", TestimonialController::class);
    Route::resource('back/services', ServiceController::class);
    Route::resource('back/contact', ContactController::class);
    Route::resource('back/titles', TitleController::class);
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');





require __DIR__.'/auth.php';
