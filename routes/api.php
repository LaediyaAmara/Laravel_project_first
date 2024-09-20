<?php

use App\Http\Controllers\StundentController;
use GuzzleHttp\Promise\Create;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// index / list siswa
Route::get('/student',[StundentController::class,'index']);

// show / show siswa
Route::get('/student/{nis}',[StundentController::class,'show']);

Route::post('/student', [StundentController::class, 'create']);

Route::put('/student/{id}', [StundentController::class, 'update']);

// edit
Route::delete('/student/{id}', [StundentController::class, 'destroy']);