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
        $clue1 = base64_encode("Pasti link tersebut tidak bisa dibuka.");
        $clue2 = base64_encode("Jangan panik yaaa &#128540; link tersebut memang salah.");
        $clue3 = base64_encode("Untuk bisa membukanya ada hal yang harus kamu kerjakan.");
        $clue4 = base64_encode("Masih ingat dengan apa yang aku ajarkan saat pertama kali kita ngobrol didiscord ya, mudah mudahan masih ingat.");
        $clue5 = base64_encode("Caranya masih sama, tinggal lakukan algoritmanya aja dikode terakhir https://bit.ly/xxxxxx.");
        return view("page.bayangan.index", [
            "clue1" => $clue1,
            "clue2" => $clue2,
            "clue3" => $clue3,
            "clue4" => $clue4,
            "clue5" => $clue5
        ]);
    }
}
