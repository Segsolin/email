<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\AllMailsController;

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

Route::get('/', [Redirect::class, 'redir']);

Route::get('/dashboard', [AllMailsController::class, 'show'])->middleware(['auth'])->name('dashboard');

Route::get('/sent', function () {
    return view('sent');
})->middleware(['auth'])->name('sent');

Route::get('/received', function () {
    return view('received');
})->middleware(['auth'])->name('received');

Route::get('/spam', function () {
    return view('spam');
})->middleware(['auth'])->name('spam');

require __DIR__.'/auth.php';
