<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiddleController extends Controller
{
    public function welcome() {
        $URL = url("/start");
        $text = base64_encode("Untuk melanjutkan riddle ini silahkan klik link berikut: $URL, untuk selanjutnya silahkan mengganti prefix (tulisan) 'start' menjadi jawaban disetiap soal untuk melanjutkan riddle ini. GOOD LUCK!");
        return view('welcome', compact("text"));
    }

    public function start() {
        return view("page.start");
    }

    public function feelings() {
        return view("page.feelings");
    }

    public function sungai() {
        return view("page.sungai");
    }

    public function cermin() {
        return view("page.cermin");
    }

    public function bayangan() {
        return view("page.bayangan");
    }
}
