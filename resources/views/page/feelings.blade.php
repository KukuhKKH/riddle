@extends('layout.app')

@section('content')
<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
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
        }, 1 * 1000)
    })
</script>
@endsection
