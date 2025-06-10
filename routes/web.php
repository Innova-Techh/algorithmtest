<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    Route::get('quiz', \App\Livewire\Quiz::class)->name('quiz');
});

Route::get('/admin/login', function () {
    // Just redirect to the dashboard (no actual login logic)
    return redirect('/admin/dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/create-quiz', function () {
    return view('admin.create-quiz');
});

Route::post('/admin/create-quiz', function (\Illuminate\Http\Request $request) {
    // In reality, you’d save to the database. For now, just log the data:
    logger($request->all());
    return redirect('/admin/dashboard')->with('success', 'Quiz created successfully!');
});
require __DIR__.'/auth.php';
