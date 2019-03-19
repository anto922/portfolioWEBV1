<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/iconic/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/iconic/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/estilos.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}">
</head>

<body class="bg-light">
    <header class="pt-4 bg-darkV2">
        <div class="container">
            <div class="row text-white text-center">
                <div class="col-md-12">
                    <img src="{{ asset('storage/app/'.$user->photo) }}" class="img-fluid rounded-circle" alt="Foto Antonio">
                    <h2>Antonio Ruiz Aznar</h2>
                    <h3 class="mt-4 mb-4 font-weight-light border-bottom">Full Stack Web Developer</h3>
                </div>

            </div>
            <div class="row mt-4 text-center">
                <div class="col-md-12  text-white">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5><span class="oi oi-envelope-closed"></span> antoniora48@gmail.com </h5>
                        </li>
                        <li class="pl-4 list-inline-item">
                            <h5><span class="oi oi-phone"></span> 635288050</h5>
                        </li>
                        <li class="pl-4 list-inline-item">
                            <h5><span class="oi oi-map-marker"></span> Concepcion Arena Nº141 Elche (Alicante)</h5>
                        </li>
                    </ul>

                </div>




            </div>

            <div class="row">
                <div class="col-md-9 offset-md-3 mt-4">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-darkV2">
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>

                        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                            <ul id="myNav" class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#experiencia">Experiencia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#formacion">Formación</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#habilidades">Habilidades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#portfolio">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#contacto">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary d-none d-sm-block" href="javascript:void(0)" data-toggle="modal" data-target="#loginAdmin"
                                        data-whatever="@mdo">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" target="_blank" href="{{url('https://www.linkedin.com/in/antonio-ruiz-aznar-a7688a108/')}}"><img src="{{ asset('storage/app/public/icon_linkedin.png') }}"/></a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>




    </header>


    <main class="p-4" role="main">
        @yield('content')
    </main>


    <div class="bg-light mt-4">
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <p class="text-center"><b>&copy; Antonio Ruiz Aznar CV Web {{date("Y")}}</b></p>
                </div>

            </div>
        </footer>
    </div>


    <a href="javascript:void(0)" id="scroll" style="display:none"><span></span></a>
    @include('admin.pdf.modal_pdf')
    @include('admin.login.login')

    <script src="{{ asset('public/assets/plugins/jquery/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/popper/popper.min.js') }}" type="text/javascript"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/datatables/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/master.js') }}" type="text/javascript"></script>

</body>

</html>