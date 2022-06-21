<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DevController extends Controller
{
    public function sandiAN() {
        $text = "Apa yang bisa berlari tetapi tidak pernah berjalan, memiliki mulut tetapi tidak pernah berbicara, memiliki kepala tetapi tidak pernah menangis, memiliki tempat tidur tetapi tidak pernah tidur";
        $str = str_split($text);
        $result = "";
        foreach ($str as $key => $value) {
            if(Str::lower($value) == "a") {
                $result .= "n";
            }
            if(Str::lower($value) == "b") {
                $result .= "o";
            }
            if(Str::lower($value) == "c") {
                $result .= "p";
            }
            if(Str::lower($value) == "d") {
                $result .= "q";
            }
            if(Str::lower($value) == "e") {
                $result .= "r";
            }
            if(Str::lower($value) == "f") {
                $result .= "s";
            }
            if(Str::lower($value) == "g") {
                $result .= "t";
            }
            if(Str::lower($value) == "h") {
                $result .= "u";
            }
            if(Str::lower($value) == "i") {
                $result .= "v";
            }
            if(Str::lower($value) == "j") {
                $result .= "w";
            }
            if(Str::lower($value) == "k") {
                $result .= "x";
            }
            if(Str::lower($value) == "l") {
                $result .= "y";
            }
            if(Str::lower($value) == "m") {
                $result .= "z";
            }
            if(Str::lower($value) == "n") {
                $result .= "a";
            }
            if(Str::lower($value) == "o") {
                $result .= "b";
            }
            if(Str::lower($value) == "p") {
                $result .= "c";
            }
            if(Str::lower($value) == "q") {
                $result .= "d";
            }
            if(Str::lower($value) == "r") {
                $result .= "e";
            }
            if(Str::lower($value) == "s") {
                $result .= "f";
            }
            if(Str::lower($value) == "t") {
                $result .= "g";
            }
            if(Str::lower($value) == "u") {
                $result .= "h";
            }
            if(Str::lower($value) == "v") {
                $result .= "i";
            }
            if(Str::lower($value) == "w") {
                $result .= "j";
            }
            if(Str::lower($value) == "x") {
                $result .= "k";
            }
            if(Str::lower($value) == "y") {
                $result .= "l";
            }
            if(Str::lower($value) == "z") {
                $result .= "m";
            }
            if(Str::lower($value) == " ") {
                $result .= " ";
            }
        }

        return $result;
    }
}
