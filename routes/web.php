<?php

use App\Http\Controllers\ServiceController;
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

// Route::get('/foo', '\App\http\Controllers\RoleController@foo',);
// Route::get('/bar', '\App\http\Controllers\RoleController@bar',);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/back/services', [ServiceController::class, 'services.index'])->name('services.index');

Route::middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/back', function(){
        $users = User::all();
        return view('back.pages.back', compact('users'));
    });
});



require __DIR__.'/auth.php';
