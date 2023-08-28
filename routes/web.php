<?php
use App\Http\Controllers\FormAddNewCardController;

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Request;



use App\Http\Controllers\CardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchGuestController;

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', [CardController::class, 'index'])->name('cards');

Route::get('/dashboard', [FormAddNewCardController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');
    
Route::get('/details/{formAddNewCard}', [FormAddNewCardController::class, 'details'])
    ->middleware(['auth'])
    ->name('details');
    
Route::resource('formAddNewCard', FormAddNewCardController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);
    
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/searchGuest', [SearchGuestController::class, 'searchGuest'])->name('searchGuest');
    
require __DIR__.'/auth.php';

// AXIOS REACT (NO PROYECTO HAPPY TRAVEL)
// Route::post('count', function (Request $request) {
//     return response()->json([
//         'message' => $request->message,
//     ]);
// });