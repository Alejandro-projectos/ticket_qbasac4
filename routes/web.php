<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('clientes',[ ClienteController::class, 'index'])
    ->middleware(['auth'])
    ->name('clientes.index');
Route::get('clientes/create',[ ClienteController::class, 'create'])
    ->middleware(['auth'])
    ->name('clientes.create');
Route::post('clientes',[ ClienteController::class, 'store'])
    ->middleware(['auth'])
    ->name('clientes.store');
Route::get('clientes/{id}',[ ClienteController::class, 'show'])
    ->middleware(['auth'])
    ->name('clientes.show');
Route::get('clientes/{id}/edit',[ ClienteController::class, 'edit'])
    ->middleware(['auth'])
    ->name('clientes.edit');
Route::put('clientes/{id}',[ ClienteController::class, 'update'])
    ->middleware(['auth'])
    ->name('clientes.update');
Route::delete('clientes/{id}',[ ClienteController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('clientes.destroy');





Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
