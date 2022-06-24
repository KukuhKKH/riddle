<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiddleController extends Controller
{
    public function welcome() {
        $URL = url("/start");
        $text = base64_encode("Untuk melanjutkan riddle ini silahkan klik link berikut: $URL, untuk selanjutnya silahkan tulis jawaban pada tempat yang aku sediakan / mengganti prefix (tulisan) 'start' menjadi jawaban disetiap soal untuk melanjutkan riddle ini. GOOD LUCK!");
        return view('page.welcome.index', compact("text"));
    }

    public function start() {
        return view("page.start.index");
    }

    public function feelings() {
        return view("page.feelings.index");
    }

    public function sungai() {
        return view("page.sungai.index");
    }

    public function cermin() {
        return view("page.cermin.index");
    }

    public function bayangan() {
        return view("page.bayangan.index");
    }
}
