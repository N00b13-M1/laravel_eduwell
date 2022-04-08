<?php

use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Title;
use App\Models\User;


Route::get('/', function () {
    $services = Service::all();
    $titles = Title::all();
    $testimonials = Testimonial::all();
    return view('welcome', compact('services', 'titles', 'testimonials'));
});

Route::resource("back/pages/testimonials", TestimonialController::class);

// Route::get('/foo', '\App\http\Controllers\RoleController@foo',);
// Route::get('/bar', '\App\http\Controllers\RoleController@bar',);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function(){
<<<<<<< HEAD
    Route::get('/back/*', function(){
        return view('back/partials/banner');
=======
    Route::get('/back', function(){
        $users = User::all();
        return view('back.pages.back', compact('users'));
>>>>>>> a4627aab91bf3ed9f8d6f6a778b5bca041a014f2
    });
});



require __DIR__.'/auth.php';
