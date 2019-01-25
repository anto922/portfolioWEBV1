<?php

namespace App\Http\Controllers;

use App;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<!DOCTYPE html>
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
                  <h6><b>Antonio Ruiz Aznar</b>
                </td>
                <td rowspan="6" class="photo">
                  <img src="photo_cv.jpeg" width="150" height="150">
                </td>
              </tr>

              <tr>
                <td>Calle Concepcion Arenal 141, Elche (Alicante) </td>
              </tr>
              <tr>
                <td>Fecha de Nacimiento: 10-04-1992</td>
              </tr>
              <tr>
                <td>Tel: 635288050</td>
              </tr>
              <tr>
                <td>Fecha de Nacimiento: 10-04-1992</td>
              </tr>
              <tr>
                <td>Email: antoniora48@gmail.com</td>
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
            <tr>
              <td style="border-left:10px solid">
                <h5 class="ml-2">Actualmente</h5>
              </td>
              <td align="left">
                <h6>GTT - Gestión Tributaria <u>Territorial San Juan Alicante</u></h6>
              </td>
            </tr>
            <tr>
              <td style="border-left:10px solid">
                <h5 class="ml-2">Junio 2016<br>Marzo 2018</h5>
              </td>
              <td align="left">
                <h6>Programador web php junior AireNetworks Elche Alicante</h6>
              </td>
            </tr>
            <tr>
              <td style="border-left:10px solid">
                <h5 class="ml-2">Junio 2014<br>Marzo 2014</h5>
              </td>
              <td align="left">
                <h6>Prácticas técnico reparador PC BOX Elche Alicante</h6>
              </td>
            </tr>
          </table>





        </body>

        </html>');

        return $pdf->stream();

    }
}
