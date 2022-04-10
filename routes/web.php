<?php

use App\Http\Controllers\ServiceController;
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
})->name('welcome.index');

Route::resource("back/testimonials", TestimonialController::class);

// Route::get('/foo', '\App\http\Controllers\RoleController@foo',);
// Route::get('/bar', '\App\http\Controllers\RoleController@bar',);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/back/services', [ServiceController::class, 'index'])->name('services.index');
// Route::get('/back/services/{id}/edit',[ServiceController::class, 'edit'])->name('services.edit');

Route::resource('back/services', ServiceController::class);



Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/back', function(){
        $users = User::all();
        return view('back.pages.back', compact('users'));
    });
});



require __DIR__.'/auth.php';
