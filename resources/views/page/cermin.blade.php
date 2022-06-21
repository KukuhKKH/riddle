@extends('layout.app')

@section('content')
<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <img src="{{ asset("img/naruto.jpg") }}" alt="NARUTO" style="width: 30%; display: none;" class="naruto">
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="word-wrap: break-word;">416B75206D656E67696B7574696D75207365746961702077616B74752C206D656E6972752073656D756120676572616B616E6D752C20746574617069206B617520746964616B2062697361206D656E79656E7475686B75206174617570756E206D656E616E676B61706B752C2073696170616B616820616B75203F</p>
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
            $(".naruto").show()
            $("#modalTitle").html("Clue")
            axios.get(`{{ route('cermin.clue') }}`)
                .then(({ data }) => {
                    $("#modalData").html(data)
                })
        }, 60 * 1000)
    })
</script>
@endsection
