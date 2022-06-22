@extends('layout.app')

@section('content')
<div id="balloon-container">
    <section class="intro-section" style="width: 100%">
        <div class="container text-center">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center">
                    <h1>HAPPY BIRTHDAY FENTI</h1>
                    <p class="ucapan">Semoga panjang umur, sehat selalu dan apa yang diinginkan bisa tercapai.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section mb-3" style="width: 100%">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>https://bit.ly/hL17Vz3</h1>
                    <p>Semoga kamu suka video sederhana yang aku buat &#128519;</p>
                </div>
                <div class="col-md-12">
                    <span id="clue1"></span>
                    <span id="clue2"></span>
                    <span id="clue3"></span>
                    <span id="clue4"></span>
                    <span id="clue5"></span>
                </div>
                <audio id="bgMusic" loop autoplay>
                    <source src="{{ asset("One Direction - One Thing.mp3") }}" type="audio/mpeg">
                    Your browser does not support the audio tag.
                </audio>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
    <script>
        $(".ucapan").fadeOut()
        $(document).ready(function() {
            const audio = document.getElementById("bgMusic")
            audio.volume = 0.4;

            setTimeout(() => {
                $(".ucapan").fadeIn()
            }, 1000)
            setTimeout(() => {
                $("#clue1").html("Pasti link tersebut tidak bisa dibuka ya.")
                $("#clue1").fadeIn()
            }, 55 * 1000)
            setTimeout(() => {
                $("#clue2").html("Jangan panik yaaa &#128540; link tersebut memang salah.")
                $("#clue2").fadeIn()
            }, 59 * 1000)
            setTimeout(() => {
                $("#clue3").html("Untuk bisa membukanya ada hal yang harus kamu kerjakan.")
                $("#clue3").fadeIn()
            }, 63 * 1000)
            setTimeout(() => {
                $("#clue4").html("Masih ingat dengan apa yang aku ajarkan saat pertama kali kita ngobrol didiscord ya, mudah mudahan masih ingat.")
                $("#clue4").fadeIn()
            }, 67 * 1000)
            setTimeout(() => {
                $("#clue5").html("Caranya masih sama, tinggal lakukan algoritmanya aja dikode terakhir https://bit.ly/xxxxxx.")
                $("#clue5").fadeIn()
            }, 71 * 1000)
        })

        function random(num) {
            return Math.floor(Math.random()*num)
        }

        function getRandomStyles() {
            var r = random(255);
            var g = random(255);
            var b = random(255);
            var mt = random(200);
            var ml = random(50);
            var dur = random(5)+5;
            return `
            background-color: rgba(${r},${g},${b},0.7);
            color: rgba(${r},${g},${b},0.7);
            box-shadow: inset -7px -3px 10px rgba(${r-10},${g-10},${b-10},0.7);
            margin: ${mt}px 0 0 ${ml}px;
            animation: float ${dur}s ease-in infinite
            `
        }

        function createBalloons(num) {
            var balloonContainer = document.getElementById("balloon-container")
            for (var i = num; i > 0; i--) {
                var balloon = document.createElement("div");
                balloon.className = "balloon";
                balloon.style.cssText = getRandomStyles();
                balloonContainer.append(balloon);
            }
        }

        window.onload = function() {
            createBalloons(100);
        }
    </script>
@endsection

@section('css')
    <style>
        #balloon-container {
            height: 100vh;
            padding: 1em;
            box-sizing: border-box;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .balloon {
            height: 125px;
            width: 105px;
            border-radius: 75% 75% 70% 70%;
            position: relative;
        }

        .balloon:before {
            content: "";
            height: 75px;
            width: 1px;
            padding: 1px;
            background-color: #FDFD96;
            display: block;
            position: absolute;
            top: 125px;
            left: 0;
            right: 0;
            margin: auto;
        }

        .balloon:after {
            content: "▲";
            text-align: center;
            display: block;
            position: absolute;
            color: inherit;
            top: 120px;
            left: 0;
            right: 0;
            margin: auto;
        }

        @keyframes float {
            from {transform: translateY(100vh);
            opacity: 1;}
            to {transform: translateY(-300vh);
            opacity: 0;}
        }
    </style>
@endsection
