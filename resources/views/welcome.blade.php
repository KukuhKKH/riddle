@extends("layout.app")

@section('content')
<!-- intro section start -->
<section class="intro-section">
    <div class="container text-center">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h2 class="section-title">SELAMAT DATANG FENTI</h2>
            </div>
        </div>
    </div>
</section>
<!-- intro section end -->


<!-- page section start -->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Terima kasih telah membuka website yang sederhana ini.</p>
                <ol>
                    <li>Jawab pertanyaan yang ada. Anda boleh membuka referensi dari manapun.</li>
                    <li>Jika anda tidak bisa menjawab meskipun sudah membuka referensi tunggu beberapa saat, akan ada clue yang muncul.</li>
                    <li>Soal ini tidak dibatasi oleh waktu.</li>
                    <li>Aku tidak ingin memberatkanmu dengan memikirkan soal ini, jika tidak mau menjawab maka tutup halaman ini dan segeralah tidur.</li>
                    <li>Mungkin suatu saat aku akan menceritakan apa yang ada pada riddle ini.</li>
                    <li>Selamat mengerjakan :)</li>
                </ol>
                <br>
                <p style="word-wrap: break-word;">{{ $text }}</p>
            </div>
        </div>
    </div>
</section>
<!-- page section end -->
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $("#container-clue").show()
                $("#modalTitle").html("Ya kali baru pertama langsung buka clue")
                axios.get(`{{ route('welcome.clue') }}`)
                    .then(({ data }) => {
                        $("#modalData").html(data)
                    })
            }, 1 * 1000)
        })
    </script>
@endsection
