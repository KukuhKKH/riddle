<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiddleController extends Controller
{
    public function welcome() {
        $URL = url("/start");
        $text = base64_encode("Untuk melanjutkan riddle ini silahkan klik link berikut: $URL, untuk selanjutnya silahkan mengganti prefix (tulisan) 'start' menjadi jawaban disetiap soal untuk melanjutkan riddle ini.");
        return view('welcome', compact("text"));
    }

    public function start() {
        $URL = url("/start");
        return view("page.start");
    }

    public function belumada() {
        return view("page.belulmada");
    }
}
