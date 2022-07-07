<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HBD FENTI</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Quicksand:400,700");
        @import url("https://fonts.googleapis.com/css?family=Graduate");

        body {
            background-color: darkgray;
        }

        body #container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 50rem;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            letter-spacing: 0.15em;
        }

        @media screen and (max-width: 525px) {
            body #container {
                top: calc(50% - -25px);
            }
        }

        body #container #cake {
            margin: 0 auto 10rem;
            width: 200px;
            height: 50px;
            background-color: #8a6b58;
            border-radius: 100%;
            box-shadow: 0px 4px 0px #6b5344, 0px 8px 0px #6b5344, 0px 12px 0px #6b5344, 0px 16px 0px #6b5344, 0px 20px 0px #6b5344, 0px 24px 0px #6b5344, 0px 28px 0px #6b5344, 0px 32px 0px #f8ecc9, 0px 36px 0px #f8ecc9, 0px 40px 0px #ca6060, 0px 44px 0px #ca6060, 0px 48px 0px #f8ecc9, 0px 52px 0px #f8ecc9, 0px 56px 0px #6b5344, 0px 60px 0px #6b5344, 0px 64px 0px #6b5344, 0px 68px 0px #6b5344, 0px 72px 0px #6b5344, 0px 76px 0px #6b5344, 0px 80px 0px #6b5344;
        }

        @media screen and (max-width: 525px) {
            body #container #cake {
                margin: 0 auto 9rem;
            }
        }

        body #container #cake::before {
            content: "";
            position: absolute;
            width: 7px;
            height: 5px;
            background-color: lightblue;
            box-shadow: 0px 5px 0px white, 0px 10px 0px lightblue, 0px 15px 0px white, 0px 20px 0px lightblue, 0px 25px 0px white, 0px 30px 0px lightblue, 0px 35px 0px white, 0px 40px 0px lightblue, 0px 45px 0px white, 0px 50px 0px lightblue;
            top: -25px;
        }

        body #container #cake #flame {
            width: 18px;
            height: 18px;
            background: yellow;
            position: absolute;
            z-index: 6;
            border-radius: 80% 0 55% 50%/55% 0 80% 50%;
            left: 50%;
            top: -40px;
            margin-left: -5px;
            transform: rotateZ(-45deg);
            animation: flame-flicker 0.9s ease infinite;
        }

        body #container #cake #flame #inner-flame {
            width: 10px;
            height: 10px;
            background: #d1835c;
            position: absolute;
            z-index: 8;
            border-radius: 80% 0 55% 50%/55% 0 80% 50%;
            left: 50%;
            margin-left: -7px;
            bottom: 2px;
            opacity: 0.4;
        }

        body #container #cake .underline {
            position: relative;
            bottom: -150px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            width: 130px;
            height: 1px;
            background-color: #c3c3c3;
        }

        body #container #cake .underline::before,
        body #container #cake .underline::after {
            content: "";
            position: absolute;
            height: 1px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        body #container #cake .underline::before {
            top: 10px;
            width: 110px;
            background-color: #c3c3c3;
        }

        body #container #cake .underline::after {
            top: 20px;
            width: 90px;
            background-color: #c3c3c3;
        }

        body #container #countdown #cdDays,
        body #container #countdown #cdHours,
        body #container #countdown #cdMins,
        body #container #countdown #cdSecs {
            display: inline-block;
            width: 24%;
            background-color: #c3c3c3;
            font-family: "Graduate", cursive;
        }

        @media screen and (max-width: 767px) {

            body #container #countdown #cdDays,
            body #container #countdown #cdHours,
            body #container #countdown #cdMins,
            body #container #countdown #cdSecs {
                width: 22%;
            }
        }

        @media screen and (max-width: 525px) {

            body #container #countdown #cdDays,
            body #container #countdown #cdHours,
            body #container #countdown #cdMins,
            body #container #countdown #cdSecs {
                width: 33%;
            }
        }

        @media screen and (max-width: 525px) {

            body #container #countdown #cdDays,
            body #container #countdown #cdHours {
                margin-bottom: 1%;
            }
        }

        body #container #countdown .spacer {
            position: relative;
            content: "";
            display: block;
            height: 20px;
            background: white;
        }

        body #container #countdown .spacer::before,
        body #container #countdown .spacer::after {
            content: "";
            position: absolute;
            top: 5px;
            width: 10px;
            height: 10px;
            background: darkgray;
            border-radius: 50%;
        }

        body #container #countdown .spacer::before {
            left: 0.8rem;
        }

        body #container #countdown .spacer::after {
            right: 0.8rem;
        }

        body #container #countdown #daysNum,
        body #container #countdown #hoursNum,
        body #container #countdown #minsNum,
        body #container #countdown #secsNum {
            background-color: white;
            color: black;
            opacity: 0.6;
            padding: 2rem 0;
            font-size: 3em;
            box-shadow: 0 15px 10px -10px rgba(181, 131, 141, 0);
        }

        @media screen and (max-width: 525px) {

            body #container #countdown #daysNum,
            body #container #countdown #hoursNum,
            body #container #countdown #minsNum,
            body #container #countdown #secsNum {
                padding: 1rem 0;
            }
        }

        @media screen and (max-width: 450px) {

            body #container #countdown #daysNum,
            body #container #countdown #hoursNum,
            body #container #countdown #minsNum,
            body #container #countdown #secsNum {
                font-size: 11vw;
            }
        }

        body #container #countdown .label {
            padding: 1.2rem 0;
            opacity: 0.6;
            font-family: "Quicksand", sans-serif;
        }

        @media screen and (max-width: 525px) {
            body #container #countdown .label {
                padding: 0.6rem 0;
            }
        }

        @media screen and (max-width: 450px) {
            body #container #countdown .label {
                font-size: 4.5vw;
            }
        }

        body #container #countdown #text {
            color: #767676;
            padding-top: 2rem;
            font-family: "Quicksand", sans-serif;
        }

        @media screen and (max-width: 525px) {
            body #container #countdown #text {
                padding-top: 1.5rem;
            }
        }

        @keyframes flame-flicker {

            0%,
            100% {
                width: 16px;
                height: 17px;
            }

            25% {
                width: 19px;
                height: 17px;
            }

            50% {
                width: 17px;
                height: 16px;
            }

            75% {
                width: 17px;
                height: 19px;
            }
        }
    </style>
</head>

<body>

    <div id="container">
        <div id="cake">
            <div id="flame">
                <div id="inner-flame"></div>
            </div>
            <div class="underline"></div>
        </div>
        <div id="countdown">
            <div id="cdDays">
                <div class="spacer"></div>
                <div id="daysNum"></div>
                <div class="label">DAY(S)</div>
            </div>
            <div id="cdHours">
                <div class="spacer"></div>
                <div id="hoursNum"></div>
                <div class="label">HOURS</div>
            </div>
            <div id="cdMins">
                <div class="spacer"></div>
                <div id="minsNum"></div>
                <div class="label">MINUTES</div>
            </div>
            <div id="cdSecs">
                <div class="spacer"></div>
                <div id="secsNum"></div>
                <div class="label">SECONDS</div>
            </div>
            <div id="text">HAPPY BIRTHDAY FENTI :)</div>
        </div>
    </div>

    <script>
        let date = "{{ $date }} GMT+0700"
        let endDate = new Date(date).getTime();
        let x = setInterval(function() {
            let now = new Date().getTime();

            let distance = endDate - now;

            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("daysNum").innerHTML = ("0" + days).slice(-2);
            document.getElementById("hoursNum").innerHTML = ("0" + hours).slice(-2);
            document.getElementById("minsNum").innerHTML = ("0" + minutes).slice(-2);
            document.getElementById("secsNum").innerHTML = ("0" + seconds).slice(-2);

            if (distance < 0) {
                clearInterval(x);
                setTimeout(() => {
                    window.location.reload()
                }, 500);
            }
        }, 1000);
    </script>
</body>

</html>
