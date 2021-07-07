<?php

use App\Http\Controllers\ContactUsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('showall', [ContactUsController::class, 'index'])
        ->name('contact.index');
});



Route::get('/', [ContactUsController::class, 'show'])
    ->name('contact.show');
Route::post('/', [ContactUsController::class, 'store'])
    ->name('contact.store');


require __DIR__ . '/auth.php';
