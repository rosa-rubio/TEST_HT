<?php
use App\Http\Controllers\FormAddNewCardController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [CardController::class, 'index'])->name('cards');

Route::get('/dashboard', [FormAddNewCardController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::resource('formAddNewCard', FormAddNewCardController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);
    
require __DIR__.'/auth.php';