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

    public function feelings() {
        return view("page.feelings_clue")->render();
    }

    public function sungai() {
        return view("page.sungai_clue")->render();
    }
}
