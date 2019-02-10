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

    <table width="100%" class=" p-4" style="background-color:rgb(192, 192, 192)">
        <tr>
            <td>
                <h6><b>{{$user->name." ".$user->surname}}</b></h6>
                <h6><b> Fecha de Nacimiento : 10-04-1992</b></h6>
                <h6><b> Tel : {{$user->telephone}}</b></h6>
                <h6><b> Email : {{$user->email}}</b></h6>
            </td>
            <td class="photo">
                <img src="{{ asset('storage/app/'.$user->photo) }}" width="150" height="150" />
            </td>
        </tr>

    </table>

    <table width="100%" class="mt-4  ml-4 p-4" cellpadding="10">
        <tr>
            <td colspan="2">

                <h1 class="btn btn-secondary btn-lg">Experiencia</h1>

            </td>
        </tr>
        @foreach ($exp as $ex)


        <tr>
            <td style="border-left:10px solid">
                @if($ex->date_end!=null)
                <h5 class="ml-2">{{\Carbon\Carbon::parse($ex->date_start)->format('M Y')}}</h5>
                <h5 class="ml-2">{{\Carbon\Carbon::parse($ex->date_end)->format('M Y')}}</h5>
                @else
                <h5 class="ml-2">Actualmente</h5>

                @endif
            </td>
            <td width="70%">
                <h6>{{$ex->description}}</h6>
                <h6><u>{{$ex->company}}</u></h6>
            </td>
        </tr>
        @endforeach

    </table>
    <table width="100%" class="mt-4  ml-4 p-4" cellpadding="10">
        <tr>
            <td colspan="2">

                <h1 class="btn btn-secondary btn-lg">Estudios</h1>

            </td>
        </tr>
        @foreach ($studies as $ex)


        <tr>
            <td style="border-left:10px solid">
                <h5 class="ml-2">{{\Carbon\Carbon::parse($ex->date_start)->format('M Y')}}</h5>
                <h5 class="ml-2">{{\Carbon\Carbon::parse($ex->date_end)->format('M Y')}}</h5>
            </td>
            <td width="70%">
                <h6>{{$ex->course}}</h6>
                <h6><u>{{$ex->school}}</u></h6>
            </td>
        </tr>
        @endforeach

    </table>

    <table class="mt-4  ml-4 p-4" width="100%" cellpadding="10">
        <tr>
            <td colspan="2">
                <h1 class="btn btn-secondary btn-lg">Aptitudes generales tecnicas</h1>
            </td>
        </tr>


        <tr>
            <td>
                <ul>
                    @foreach ($skills as $sk)


                    <li>
                        {{$sk->description}}
                    </li>
                    @endforeach
                </ul>
            </td>
        </tr>

    </table>

    <table class="mt-4  ml-4 p-4" width="100%" cellpadding="10">
        <tr>
            <td colspan="2">
                <h1 class="btn btn-secondary btn-lg">Otras aptitudes</h1>
            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li>
                        Organizado y metodico
                    </li>
                    <li>
                        Dinamico
                    </li>
                    <li>
                        Capacidad de trabajo en equipo
                    </li>

                </ul>
            </td>
        </tr>
    </table>

    <table class="mt-4  ml-4 p-4" width="100%" cellpadding="10">
        <tr>
            <td colspan="2">


                <h1 class="btn btn-secondary btn-lg">Otras datos de interes</h1>

            </td>
        </tr>

        <tr>
            <td>
                <ul>
                    <li>
                        Carnet de conducir y vehiculo propio
                    </li>
                    <li>
                        Total disponibilidad para viajar y desplazamiento
                    </li>
                </ul>
            </td>
        </tr>

    </table>





</body>


</html>