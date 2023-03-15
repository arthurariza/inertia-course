<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
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

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::delete('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('login.delete');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home', [
            'name' => 'Arthur',
            'frameworks' => ['Laravel', 'Vue', 'Inertia']
        ]);
    });

    Route::get('/users', function () {
        $users = User::query()
            ->select('id', 'name')
            ->when(Request::input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Users', [
            'users' => $users,
            'filters' => Request::only(['search'])
        ]);
    });

    Route::post('/users', function () {
        sleep(3);

        $validated = Request::validate(
            [
                'name' => 'required',
                'email' => ['required', 'email'],
                'password' => ['required', 'min:3']
            ]
        );

        User::create($validated);

        return redirect('/users');
    });

    Route::get('/users/create', function () {
        return Inertia::render('UsersCreate');
    });

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    });
});
