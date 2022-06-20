@extends('layout.app')

@section('content')
<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 text-center">
                <img src="{{ asset("img/soal 1.png") }}" alt="" class="img-thumbnail" style="width: 250px">
                <p><small>Jenis foto</small></p>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">73 32 109 97 121 32 98 101 32 97 32 113 117 105 101 116 32 115 101 110 115 101 32 111 102 32 104 97 112 112 105 110 101 115 115 44 32 115 97 100 110 101 115 115 44 32 111 114 32 102 101 97 114 32 116 111 32 109 97 110 121 46 32 73 32 99 97 110 32 98 101 32 115 104 111 119 110 32 97 110 100 32 115 111 109 101 116 105 109 101 115 32 106 117 115 116 32 98 101 32 103 111 110 101 44 32 98 117 116 32 73 32 97 108 119 97 121 115 32 99 111 109 101 32 98 97 99 107 32 98 101 102 111 114 101 32 105 116 39 115 32 116 111 111 32 108 111 110 103 46 32 87 104 97 116 32 97 109 32 73 63</p>
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
                axios.get(`{{ route('start.clue') }}`)
                    .then(({ data }) => {
                        $("#modalData").html(data)
                    })
            }, 60 * 1000)
        })
    </script>
@endsection
