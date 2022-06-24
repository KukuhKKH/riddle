@extends('layout.app')

@section('content')
<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <img src="{{ asset("img/gelombang_elektromagnetik.png") }}" alt="GELOMBANG" style="width: 50%">
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="word-wrap: break-word;">
                    Jangan
                    <span class="text-white">Jika</span>
                    mudah
                    <span class="text-white">kamu</span>
                    terkecoh
                    <span class="text-white">menjatuhkanku</span>
                    dengan
                    <span class="text-white">aku</span>
                    apa
                    <span class="text-white">pasti</span>
                    yang
                    <span class="text-white">akan</span>
                    anda
                    <span class="text-white">hancur</span>
                    lihat.
                    <span class="text-white">namun</span>
                    Bisa
                    <span class="text-white">jika</span>
                    jadi
                    <span class="text-white">kau</span>
                    jawabannya
                    <span class="text-white">memberiku</span>
                    ada
                    <span class="text-white">senyuman</span>
                    didepan
                    <span class="text-white">aku</span>
                    mata
                    <span class="text-white">akan</span>
                    tapi
                    <span class="text-white">tersenyum</span>
                    kamu
                    <span class="text-white">juga</span>
                    tidak
                    <span class="text-white">untukmu</span>
                    menyadarinya.
                  </p>
            </div>

            <div class="col-md-12 text-center">
                <button class="btn btn-success" id="answer">Jawaban</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        setTimeout(() => {
            $("#container-clue").show()
            $("#modalTitle").html("Clue")
            axios.get(`{{ route('sungai.clue') }}`)
                .then(({ data }) => {
                    $("#modalData").html(data)
                })
        }, 60 * 1000)

        $("#answer").on("click", () => {
            answerRiddle(`{{ route("answer.sungai") }}`)
        })
    })
</script>
@endsection
