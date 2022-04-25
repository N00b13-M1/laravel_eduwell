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
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $services = Service::all();
    $titles = Title::all();
    $testimonials = Testimonial::all();
    $contact = Contact::all();
    return view('welcome', compact('services', 'titles', 'testimonials', 'contact'));
})->name('welcome.index');


// Route::middleware(['auth', 'role:admin'])->group(function(){


//middleware group
// Route::middleware(['auth', 'role:admin'])->group(function(){
//     Route::get('/back', function(){
//         $users = User::all();
//         return view('back.pages.back', compact('users'));
//     })->name('back.index');
    
//     Route::resource("back/testimonials", TestimonialController::class);
//     Route::resource('back/services', ServiceController::class);
//     Route::resource('back/contact', ContactController::class);
//     Route::resource('back/titles', TitleController::class)->middleware('age_check');
// });


Route::get('/back', function(){
    $users = User::all();
    return view('back.pages.back', compact('users'));
})->name('back.index')->middleware(['auth', 'role:admin']);

//middleware simple
// Route::resource("back/testimonials", TestimonialController::class)->middleware('webmasterVerification');
// Route::resource('back/services', ServiceController::class)->middleware('webmasterVerification');
// Route::resource('/back/contact', ContactController::class)->middleware('adminVerification');
// Route::resource('back/titles', TitleController::class)->middleware('adminVerification');


//avec policy
Route::resource("back/testimonials", TestimonialController::class);
Route::resource('back/services', ServiceController::class);
Route::resource('/back/contact', ContactController::class);
Route::resource('back/titles', TitleController::class);

// Route::get('/back/contact', function () {
//     return view('back.pages.contact.all');
// })->middleware('auth')->name('dashboard');


Route::get('/dashboard', function () {
    return view('back.pages.back');
})->middleware('auth')->name('back.index');


Route::get('/noaccess', function(){
    return view('back.pages.noaccess');
});


require __DIR__.'/auth.php';

