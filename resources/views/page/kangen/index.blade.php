<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aku Kangen</title>
    <link rel="stylesheet" href="{{ asset("css/kangen.css") }}">
</head>
<body>
    <div id="bgbelakang">
        <img src="{{ asset("img/page/nightin.jpg") }}" />
    </div>

    <div id="Content">
        <div>
          <img id="fotosatu" src="#" /><img id="fotodua" src="#" /><img
            id="fototiga"
            src="#"
          /><img id="fotoempat" src="#" /><img id="fotolima" src="#" /><img
            id="fotoenam"
            src="#"
          /><img id="fototujuh" src="#" /><img id="fotolapan" src="#" />
        </div>
        <div>
          <blockquote id="bq">
            <p id="kalimat">...</p>
            <p id="kalimatc"></p>
          </blockquote>
        </div>

        <div id="contTom">
          <a id="By" class="button" onClick="sjawab()">
            <b>💌 Klik Ini</b>
          </a>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset("js/page/kangen.js") }}"></script>
</body>
</html>
