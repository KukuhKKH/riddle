@extends('layout.app')

@section('content')
<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <img src="{{ asset("img/1 14.jpg") }}" alt="14" style="width: 25%">
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>ncn lnat ovfn oreynev grgncv gvqnx creanu orewnyna zrzvyvxv zhyhg grgncv gvqnx creanu oreovpnen zrzvyvxv xrcnyn grgncv gvqnx creanu zranatvf zrzvyvxv grzcng gvqhe grgncv gvqnx creanu gvqhe</p>
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
            axios.get(`{{ route('feelings.clue') }}`)
                .then(({ data }) => {
                    $("#modalData").html(data)
                })
        }, 60 * 1000)

        $("#answer").on("click", () => {
            answerRiddle(`{{ route("answer.feelings") }}`)
        })
    })
</script>
@endsection
