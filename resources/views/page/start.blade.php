@extends('layout.app')

@section('content')
    
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $("#container-clue").show()
                // $("#modalTitle").html("Ya kali baru pertama langsung buka clue")
                axios.get(`{{ route('start.clue') }}`)
                    .then(({ data }) => {
                        $("#modalData").html(data)
                    })
            }, 60 * 1000)
        })
    </script>
@endsection
