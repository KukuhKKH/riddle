@extends('layout.app')

@section('content')
<div id="balloon-container">
    {{-- <audio id="bgMusic" controls loop autoplay>
        <source src="{{ asset("One Direction - One Thing.mp3") }}" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> --}}
    <div class="audio-player">
        <div class="timeline">
          <div class="progress"></div>
        </div>
        <div class="controls">
          <div class="play-container">
            <div class="toggle-play play">
          </div>
          </div>
          <div class="time">
            <div class="current">0:00</div>
            <div class="divider">/</div>
            <div class="length"></div>
          </div>
          <div class="name">One Direction - One Thing</div>
          <div class="volume-container">
            <div class="volume-button">
              <div class="volume icono-volumeMedium"></div>
            </div>

            <div class="volume-slider">
              <div class="volume-percentage"></div>
            </div>
          </div>
        </div>
      </div>
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
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
    {{-- <script src="{{ asset("js/audio.js") }}"></script> --}}
    <script>
        $(".ucapan").fadeOut()
        $(document).ready(function() {
            // const audio = document.getElementById("bgMusic")
            // audio.volume = 0.4;

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

    <script>
        const audioPlayer = document.querySelector(".audio-player");
        const audio = new Audio(
            "{{ asset("One Direction - One Thing.mp3") }}"
        );
        //credit for song: Adrian kreativaweb@gmail.com

        audio.addEventListener(
        "loadeddata",
        () => {
            audioPlayer.querySelector(".time .length").textContent = getTimeCodeFromNum( audio.duration );
            audio.volume = 0.75;
        },
        false
        );

        //click on timeline to skip around
        const timeline = audioPlayer.querySelector(".timeline");
        timeline.addEventListener(
        "click",
        (e) => {
            const timelineWidth = window.getComputedStyle(timeline).width;
            const timeToSeek = (e.offsetX / parseInt(timelineWidth)) * audio.duration;
            audio.currentTime = timeToSeek;
        },
        false
        );

        //click volume slider to change volume
        const volumeSlider = audioPlayer.querySelector(".controls .volume-slider");
        volumeSlider.addEventListener(
        "click",
        (e) => {
            const sliderWidth = window.getComputedStyle(volumeSlider).width;
            const newVolume = e.offsetX / parseInt(sliderWidth);
            audio.volume = newVolume;
            audioPlayer.querySelector(".controls .volume-percentage").style.width =
            newVolume * 100 + "%";
        },
        false
        );

        //check audio percentage and update time accordingly
        setInterval(() => {
            const progressBar = audioPlayer.querySelector(".progress");
            progressBar.style.width = (audio.currentTime / audio.duration) * 100 + "%";
            audioPlayer.querySelector(".time .current").textContent = getTimeCodeFromNum(
                audio.currentTime
            );
        }, 500);

        //toggle between playing and pausing on button click
        const playBtn = audioPlayer.querySelector(".controls .toggle-play");
        playBtn.addEventListener(
        "click",
            () => {
                if (audio.paused) {
                    playBtn.classList.remove("play");
                    playBtn.classList.add("pause");
                    audio.play();
                } else {
                    playBtn.classList.remove("pause");
                    playBtn.classList.add("play");
                    audio.pause();
                }
            },
            false
        );

        audioPlayer.querySelector(".volume-button").addEventListener("click", () => {
            const volumeEl = audioPlayer.querySelector(".volume-container .volume");
            audio.muted = !audio.muted;
            if (audio.muted) {
                volumeEl.classList.remove("icono-volumeMedium");
                volumeEl.classList.add("icono-volumeMute");
            } else {
                volumeEl.classList.add("icono-volumeMedium");
                volumeEl.classList.remove("icono-volumeMute");
            }
        });

        //turn 128 seconds into 2:08
        function getTimeCodeFromNum(num) {
            let seconds = parseInt(num);
            let minutes = parseInt(seconds / 60);
            seconds -= minutes * 60;
            const hours = parseInt(minutes / 60);
            minutes -= hours * 60;

            if (hours === 0) return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;
            return `${String(hours).padStart(2, 0)}:${minutes}:${String(
                seconds % 60
            ).padStart(2, 0)}`;
        }
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://icono-49d6.kxcdn.com/icono.min.css" />
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

        .audio-player {
            height: 50px;
            width: 100%;
            background: #444;
            box-shadow: 0 0 20px 0 #000a;
            font-family: arial;
            color: white;
            font-size: 0.75em;
            overflow: hidden;
            display: grid;
            grid-template-rows: 6px auto;
        }
        .audio-player .timeline {
            background: white;
            width: 100%;
            position: relative;
            cursor: pointer;
            box-shadow: 0 2px 10px 0 #0008;
        }
        .audio-player .timeline .progress {
            background: coral;
            width: 0%;
            height: 100%;
            transition: 0.25s;
        }
        .audio-player .controls {
            display: flex;
            justify-content: space-between;
            align-items: stretch;
            padding: 0 20px;
        }
        .audio-player .controls > * {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .audio-player .controls .toggle-play.play {
            cursor: pointer;
            position: relative;
            left: 0;
            height: 0;
            width: 0;
            border: 7px solid #0000;
            border-left: 13px solid white;
        }
        .audio-player .controls .toggle-play.play:hover {
            transform: scale(1.1);
        }
        .audio-player .controls .toggle-play.pause {
            height: 15px;
            width: 20px;
            cursor: pointer;
            position: relative;
        }
        .audio-player .controls .toggle-play.pause:before {
            position: absolute;
            top: 0;
            left: 0px;
            background: white;
            content: "";
            height: 15px;
            width: 3px;
        }
        .audio-player .controls .toggle-play.pause:after {
            position: absolute;
            top: 0;
            right: 8px;
            background: white;
            content: "";
            height: 15px;
            width: 3px;
        }
        .audio-player .controls .toggle-play.pause:hover {
            transform: scale(1.1);
        }
        .audio-player .controls .time {
            display: flex;
        }
        .audio-player .controls .time > * {
            padding: 2px;
        }
        .audio-player .controls .volume-container {
            cursor: pointer;
            position: relative;
            z-index: 2;
        }
        .audio-player .controls .volume-container .volume-button {
            height: 26px;
            display: flex;
            align-items: center;
        }
        .audio-player .controls .volume-container .volume-button .volume {
            transform: scale(0.7);
        }
        .audio-player .controls .volume-container .volume-slider {
            position: absolute;
            left: -3px;
            top: 15px;
            z-index: -1;
            width: 0;
            height: 15px;
            background: white;
            box-shadow: 0 0 20px #000a;
            transition: 0.25s;
        }
        .audio-player .controls .volume-container .volume-slider .volume-percentage {
            background: coral;
            height: 100%;
            width: 75%;
        }
        .audio-player .controls .volume-container:hover .volume-slider {
            left: -123px;
            width: 120px;
        }
    </style>
@endsection
