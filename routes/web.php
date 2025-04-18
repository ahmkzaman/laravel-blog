<?php

use App\Models\Post;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Appearance;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/posts/create', [PostController::class, 'create'])
        ->name('posts.create');
    Route::get('/post/{post}/edit  ', [PostController::class, 'edit'])
        ->name('posts.edit');
});

Route::get('/posts', [PostController::class, 'index'])
    ->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show');

require __DIR__ . '/auth.php';
