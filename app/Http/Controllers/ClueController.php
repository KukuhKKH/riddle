<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClueController extends Controller
{
    public function welcome() {
        return view("page.welcome.clue")->render();
    }

    public function start() {
        return view("page.start.clue")->render();
    }

    public function feelings() {
        return view("page.feelings.clue")->render();
    }

    public function sungai() {
        return view("page.sungai.clue")->render();
    }

    public function cermin() {
        return view("page.cermin.clue")->render();
    }
}
