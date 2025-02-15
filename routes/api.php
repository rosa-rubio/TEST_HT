<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/cards', 'App\Http\Controllers\CardController@index');
Route::get('/cards/{card}', 'App\Http\Controllers\CardController@show');
Route::post('/cards','App\Http\Controllers\CardController@store');
Route::put('/cards/{card}','App\Http\Controllers\CardController@update');
Route::delete('/cards/{card}', 'App\Http\Controllers\CardController@destroy');

// Route::get('cards', function () {
//     return response(Card::all(), 200);
// });
// Route::get('cards/{card}', function ($cardId) {
//     return response(Card::find($cardId), 200);
// });
 
// Route::post('cards', function(Request $request) {
//     $resp = Card::create($request->all());
//      return $resp;;
// });

// Route::put('cards/{card}', function(Request $request, $cardId) {
//     $card = Card::findOrFail($cardId);
//     $card->update($request->all());
//     return $card;
// });

// Route::delete('cards/{card}',function($cardId) {
// 	Card::find($cardId)->delete();
//     return 204;
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
