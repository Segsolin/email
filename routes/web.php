<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\AllMailsController;
use App\Http\Controllers\Compose;

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

Route::post('/compose', [Compose::class, 'sendMail']);

Route::get('/sent', [AllMailsController::class, 'findSent'])->middleware(['auth'])->name('sent');

Route::get('/received',[AllMailsController::class, 'findReceived'])->middleware(['auth'])->name('received');

Route::get('/spam', [AllMailsController::class, 'findSpam'])->middleware(['auth'])->name('spam');

Route::get('/compose', function () {
    return view('compose');
})->middleware(['auth'])->name('compose');

require __DIR__.'/auth.php';
