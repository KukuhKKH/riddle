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
date_default_timezone_set("Asia/Jakarta");
// $date = date("M d, Y H:i:s", strtotime("2022-07-07 16:00:00"));
$date = new DateTime("2022-07-07 16:00:00", new DateTimeZone("Asia/Jakarta"));

if(strtotime(date("Y-m-d H:i:s")) >= strtotime($date->format("Y-m-d H:i:s"))) {
    Route::get('/', [RiddleController::class, "welcome"]);
    Route::get('/start', [RiddleController::class, "start"]);
    Route::get('/feelings', [RiddleController::class, "feelings"]);
    Route::get('/sungai', [RiddleController::class, "sungai"]);
    Route::get('/cermin', [RiddleController::class, "cermin"]);
    Route::get('/bayangan', [RiddleController::class, "bayangan"]);

    /** Clue AJAX */
    Route::prefix("clue")->group(function() {
        Route::get("welcome", [ClueController::class, "welcome"])->name("welcome.clue");
        Route::get("start", [ClueController::class, "start"])->name("start.clue");
        Route::get("feelings", [ClueController::class, "feelings"])->name("feelings.clue");
        Route::get("sungai", [ClueController::class, "sungai"])->name("sungai.clue");
        Route::get("cermin", [ClueController::class, "cermin"])->name("cermin.clue");
    });


    Route::prefix("dev")->group(function() {
        Route::get("sandiAN", [DevController::class, "sandiAN"]);
    });
} else {
    Route::get("/", function() use($date) {
        return view("page.countdown", [
            "date" => $date->format("M d, Y H:i:s")
        ]);
    });
}

