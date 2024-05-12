<?php

use App\Events\TestEvent;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Util\Test;

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
    return view('auth.login');
});

Route::get('event', function () {
    event(new TestEvent());
});


Route::prefix('/admin')->group(function () {
    // load admin dashboard
    Route::get('/', [AdminLoginController::class, 'index'])->name('admin.dashboard')->middleware('admin');
    // load login page
    Route::get('/login', [AdminLoginController::class, 'login_page'])->name('admin.login');
    // login
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');
    // load contacts
    Route::get('/contacts', [ContactController::class, 'load_contacts']);
});


Route::post('/send-message', [ChatController::class, 'send_message']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
