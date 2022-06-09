<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/onboarding', \App\Http\Livewire\Onboarding::class)->name('onboarding');

Route::get('/commitment/{commitment}', \App\Http\Livewire\Commitment::class)->name('commitment.show')->middleware('auth');
Route::get('/commitment/', \App\Http\Livewire\CommitmentList::class)->name('commitment.index')->middleware('auth');

Route::get('/settings', \App\Http\Livewire\ProfileSettings::class)->name('settings')->middleware('auth');

require __DIR__.'/auth.php';
