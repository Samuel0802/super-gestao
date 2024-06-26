<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    @yield('styles') {{-- yield: fazer importação dos css --}}

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />

    {{-- Dependencia toastr função de alert css --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <meta name="theme-color" content="#712cf9">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    {{-- titulo dinamico --}}
    <title>Super Gestão @yield('titulo')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="{{asset('img/logo.png')}}">
                    </a>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">

                        <li class="nav-item">
                            <a href="{{route('app.home')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline texto-branco">Home</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('app.cliente')}}" class="nav-link align-middle px-0">
                                <i class="bi bi-info-square-fill"></i> <span class="ms-1 d-none d-sm-inline texto-branco">Cliente</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('app.fornecedor')}}" class="nav-link align-middle px-0">
                                <i class="bi bi-telephone-fill"></i> <span class="ms-1 d-none d-sm-inline texto-branco">Fornecedor</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('app.produto')}}" class="nav-link align-middle px-0">
                                <i class="bi bi-telephone-fill"></i> <span class="ms-1 d-none d-sm-inline texto-branco">Produto</span>
                            </a>
                        </li>

                        <hr style="color: white">

                        <li class="nav-item">
                            <a href="{{route('app.sair')}}" class="nav-link align-middle px-0">
                                <i class="bi bi-telephone-fill"></i> <span class="ms-1 d-none d-sm-inline texto-branco">Sair</span>
                            </a>
                        </li>


                    </ul>
                    <hr>



                </div>
            </div>


            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            @yield('conteudo_privado') {{-- content renderizar tudo o que eu  quero renderizar --}}


        </main>

        </div>
    </div>



     {{-- SCRIPT --}}
     @yield('script')  {{-- yield: fazer importação dos js --}}
     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script src="/js/bootstrap.blundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
     <script src="/js/dashboard.js"></script>
     <script src="/js/color-modes.js"></script>
</body>

</html>
