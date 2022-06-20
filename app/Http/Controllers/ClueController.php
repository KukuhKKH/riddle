<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClueController extends Controller
{
    public function welcome() {
        return view("welcome_clue")->render();
    }

    public function start() {
        return view("page/start_clue")->render();
    }
}
