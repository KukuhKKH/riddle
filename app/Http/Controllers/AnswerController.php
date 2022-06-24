<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function start(Request $request) {
        if($request->answer == "feelings") {
            return response()->json([
                "url" => \url("feelings")
            ]);
        }

        return response()->json([
            "statusText" => "Jawaban kamu salah"
        ], 500);
    }

    public function feelings(Request $request) {
        if($request->answer == "sungai") {
            return response()->json([
                "url" => \url("sungai")
            ]);
        }

        return response()->json([
            "statusText" => "Jawaban kamu salah"
        ], 500);
    }

    public function sungai(Request $request) {
        if($request->answer == "cermin") {
            return response()->json([
                "url" => \url("cermin")
            ]);
        }

        return response()->json([
            "statusText" => "Jawaban kamu salah"
        ], 500);
    }

    public function cermin(Request $request) {
        if($request->answer == "bayangan") {
            return response()->json([
                "url" => \url("bayangan")
            ]);
        }

        return response()->json([
            "statusText" => "Jawaban kamu salah"
        ], 500);
    }
}
