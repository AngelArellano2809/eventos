<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\EventoController;

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', ['dashboard']);
})->middleware(['auth', 'verified'])->name('home');


Route::resource('eventos', EventoController::class)->middleware(['auth', 'verified']);

Route::resource('alumnos', AlumnoController::class)->middleware(['auth', 'verified']);

Route::resource('administradores', AdministradorController::class)->middleware(['auth', 'verified']);


Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
