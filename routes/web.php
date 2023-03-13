<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'name' => 'Arthur',
        'frameworks' => ['Laravel', 'Vue', 'Inertia']
    ]);
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString(),
        'users' => User::select('id', 'name')->get(),
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd('Logging Out!');
});
