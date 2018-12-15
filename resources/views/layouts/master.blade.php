<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/iconic/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/estilos.css') }}" rel="stylesheet">
</head>

<body class="bg-primary">


    <header class="pt-3 bg-darkV2">

        <div class="container">

            <div class="row">
                <div class="col-md-3 mx-auto">
                    <img src="{{ asset('storage/app/'.$user->photo) }}" class="img-fluid rounded-circle" alt="Foto Antonio">
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 mx-auto">
                    <p class="text-white">_________________________________________________________________</p>
                    <h1 class="text-white text-center">
                        {{$user->name}}
                    </h1>
                    <p class="text-white">_________________________________________________________________</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h6 class="text-white text-center">Junior Web Developer</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 mb-5">
                    <ul id="myNav" class="nav nav-pills justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre-mi">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#formacion">Formación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experiencia">Experiencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#habilidades">Habilidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contacto')}}">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#loginAdmin" data-whatever="@mdo">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{url('https://www.linkedin.com/in/antonio-ruiz-aznar-a7688a108/')}}"><img src="{{ asset('storage/app/public/icon_linkedin.png') }}"/></a>

                        </li>
                    </ul>
                </div>
            </div>



        </div>

    </header>

    <main role="main">
        @yield('content')
    </main>
    <div class="bg-light">
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <p class="text-center"><b>&copy; Portfolio web by Antonio Ruiz Aznar {{date("Y")}}</b></p>
                </div>

            </div>
        </footer>
    </div>

    <script src="{{ asset('public/assets/plugins/jquery/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/popper/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/jquery-knob/jquery.knob.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/aos/aos.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/plugins/datatables/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/master.js') }}" type="text/javascript"></script>

</body>

</html>