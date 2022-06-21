<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevController;
use App\Http\Controllers\ClueController;
use App\Http\Controllers\RiddleController;

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

Route::get('/', [RiddleController::class, "welcome"]);
Route::get('/start', [RiddleController::class, "start"]);
Route::get('/feelings', [RiddleController::class, "feelings"]);
Route::get('/sungai', [RiddleController::class, "sungai"]);


// Sementara
Route::get("belumada", [RiddleController::class, "belumada"]);



/** Clue AJAX */
Route::prefix("clue")->group(function() {
    Route::get("welcome", [ClueController::class, "welcome"])->name("welcome.clue");
    Route::get("start", [ClueController::class, "start"])->name("start.clue");
    Route::get("feelings", [ClueController::class, "feelings"])->name("feelings.clue");
    Route::get("sungai", [ClueController::class, "sungai"])->name("sungai.clue");
});


Route::prefix("dev")->group(function() {
    Route::get("sandiAN", [DevController::class, "sandiAN"]);
});
