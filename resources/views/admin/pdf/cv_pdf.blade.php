<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <style>
        header {
            padding: 50px
        }

        .photo {
            border-left: 4px solid rgb(24, 55, 93);
            padding-left: 50px
        }
    </style>
</head>

<body>
    <header class="bg-secondary">
        <table width="100%">
            <tr>
                <td>
                    <h6><b>{{$user->name}}</b>
                </td>
                <td rowspan="6" class="photo">
                    <img src="{{ asset('storage/app/'.$user->photo) }}" width="150" height="150">
                </td>
            </tr>

            <tr>
                <td>Calle Concepcion Arenal 141, Elche (Alicante) </td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento: 10-04-1992</td>
            </tr>
            <tr>
                <td>Email: {{$user->email}}</td>
            </tr>
        </table>
    </header>
    <table class="mt-4 ml-4" width="100%" cellpadding="5">
        <tr>
            <td colspan="2">
                <div class="alert alert-primary ml-2 pl-4 pr-4">
                    <h5>Experiencia</h5>
                </div>
            </td>
        </tr>
        @foreach ($exp as $ex)


        <tr>
            <td style="border-left:10px solid">
                <h5 class="ml-2">{{$ex->date_start." | ".$ex->date_end}}</h5>
            </td>
            <td align="left">
                <h6>{{$ex->company}}</h6>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2">
                <div class="alert alert-primary mt-4 ml-2 pl-4 pr-4">
                    <h5>Estudios</h5>
                </div>
            </td>
        </tr>
        @foreach ($studies as $st)


        <tr>
            <td style="border-left:10px solid">
                <h5 class="ml-2">{{$st->date_start." | ".$st->date_end}}</h5>
            </td>
            <td align="left">
                <h6>{{$st->school}}</h6>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2">
                <div class="alert alert-primary mt-4 ml-2 pl-4 pr-4">
                    <h5>Aptitudes generales tecnicas</h5>
                </div>
            </td>
        </tr>


        <tr>
            <td>
                <ul>
                    @foreach ($skills as $sk)


                    <li class="text-secondary">
                        {{$sk->description}}
                    </li>
                    @endforeach
                </ul>
            </td>
        </tr>




        <tr>
            <td colspan="2">
                <div class="alert alert-primary mt-4 ml-2 pl-4 pr-4">
                    <h5>Otras aptitudes</h5>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li class="text-secondary">
                        Organizado y metodico
                    </li>
                    <li class="text-secondary">
                        Dinamico
                    </li>
                    <li class="text-secondary">
                        Capacidad de trabajo en equipo
                    </li>

                </ul>
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="2">
                <div class="alert alert-primary mt-4 ml-2 pl-4 pr-4">
                    <h5>Otras datos de interes</h5>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li class="text-secondary">
                        Carnet de conducir y vehiculo propio
                    </li>
                    <li class="text-secondary">
                        Total disponibilidad para viajar y desplazamiento
                    </li>
                </ul>
            </td>
        </tr>
    </table>






</body>

</html>