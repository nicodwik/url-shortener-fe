<?php

use App\Http\Controllers\RedirectionController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Dashboard\Index as DashboardIndex;
use App\Http\Livewire\Guest\Home;
use App\Http\Livewire\Redirection\Create as RedirectionCreate;
use App\Http\Livewire\Redirection\Manage as RedirectionManage;
use App\Http\Livewire\User\Profile;

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

// Route::get('/', function() {
//     return redirect('/login');
// });

Route::get('/', Home::class)->name('home');

Route::prefix('guest')->as('guest.')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');

    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

    Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

    Route::prefix('redirection')->as('redirection.')->group(function () {
        Route::post('create', ForgotPassword::class)->name('create');
    });
});

Route::prefix('admin')->middleware('auth.api')->as('admin.')->group(function () {
    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
    // Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    // Route::get('/laravel-user-management', UserManagement::class)->name('user-management');

    Route::prefix('redirection')->as('redirection.')->group(function() {
        Route::get('/', RedirectionManage::class)->name('manage');
        Route::get('/create', RedirectionCreate::class)->name('create');
    });

    Route::prefix('user')->as('user.')->group(function() {
        Route::get('/profile', Profile::class)->name('profile');
    });
});

Route::get('/{short_url}', RedirectionController::class)->name('redirect');