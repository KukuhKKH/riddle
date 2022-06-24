<!DOCTYPE html>
<html lang="en">

<head>
    <title>Opo Hayoooooooo</title>
    <meta charset="UTF-8">
    <meta name="description" content="Gak usah aneh aneh">
    <meta name="keywords" content="Di sini tidak ada apa apa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{ asset("img/favicon.ico") }}" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("css/style.css") }}" />
    @yield('css')

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @yield('content')

    <div class="container" id="container-clue" style="display: none">
        <a href="javascript:void(0)" id="textClue">Clue</a>
    </div>

    <!-- footer section start -->
    <footer class="footer-section text-center ">
        <div class="container">
            <div class="copyright">
                Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved | This design is made with <i class="fa fa-heart-o"
                    aria-hidden="true"></i> by <a href="javascript:void(0)" target="_blank">AbangLipai</a>
            </div>
        </div>
    </footer>
    <!-- footer section end -->

    <div class="modal fade" id="modalClue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalData"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>



    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/mixitup.min.js") }}"></script>
    <script src="{{ asset("js/magnific-popup.min.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        @if (!Request::is('start'))
            document.addEventListener('contextmenu', event => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "{{ $context }}",
                })
                event.preventDefault()
            })
        @endif

        $(document).ready(() => {
            $("#textClue").on("click", () => {
                $("#modalClue").modal("show");
            });
        })

        const answerRiddle = url => {
            Swal.fire({
                title: 'Jawaban kamu',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Cek Jawaban',
                showLoaderOnConfirm: true,
                cancelButtonText: "Batal",
                preConfirm: (answer) => {
                    return fetch(`${url}`, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            "answer": answer
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error("Jawaban anda salah")
                        }
                        return response.json()
                    })
                    .catch(error => {
                        Swal.showValidationMessage(`${error}`)
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Berhasil", "Jawaban anda benar", "success")
                    setTimeout(() => {
                        window.location.href = result.value.url
                    }, 500)
                }
            })
        }
    </script>

    @yield('js')
</body>

</html>
