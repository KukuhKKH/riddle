<?php

use App\Http\Controllers\AnswerController;
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

Route::post("start", [AnswerController::class, "start"])->name("answer.start");
Route::post("feelings", [AnswerController::class, "feelings"])->name("answer.feelings");
Route::post("sungai", [AnswerController::class, "sungai"])->name("answer.sungai");
Route::post("cermin", [AnswerController::class, "cermin"])->name("answer.cermin");
