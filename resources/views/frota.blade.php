<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="../css/frota.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

@extends('layout.master')
@section('title', 'Aero Clube de Leiria - Frota')

@section('content')

<div id="corpo">


    <div class="frota">
      <h1>Frota</h1>
    </div>





    <div class="flex-wrap d-flex justify-content-center">
      <div class="card" style="width: 30rem;">
        <img class="card-img-top" src="../imagens/cessna172.jpg" alt="vh" style="width:100%">
        <div class="card-body">
          <h2 class="card-title">CESSNA 172N SKYHAWK II</h2>
          <p class="card-text">
            <strong>Engine:</strong>
            LYCOMING O360 A4M 180CV @2700RPM
            <br>
            <strong>Fuel Capacity:</strong>
            54 USGAL USABLE (LONG RANGE)
            <br>
            <strong>MTOW:</strong>
            1157KG
            <br>
            <strong>Seats:</strong>
            4
            <br>
            <strong>Avionic/Instruments:</strong>
          </p>
          <ul>
            <li>

              1X VOR, 1X ADF, TRIG TY96 8.33KHZ, EGT
            </li>
            <li>

              XPDR S
            </li>
          </ul>
          </p>
        </div>
      </div>

      <div class="card" style="width: 30rem;">
        <img class="card-img-top" src="../imagens/reims.jpg" alt="vh" style="width:100%">
        <div class="card-body">
          <h2 class="card-title">REIMS/CESSNA F-150H</h2>
          <p class="card-text">
            <strong>Engine:</strong>
            CONTINENTAL O-200 100CV @2750RPM
            <br>
            <strong>Fuel Capacity:</strong>
            22,5 USGAL USABLE
            <br>
            <strong>MTOW:</strong>
            726KG
            <br>
            <strong>Seats:</strong>
            2
            <br>
            <strong>Avionic/Instruments:</strong>
          </p>
          <ul>
            <li>

              1X VOR, TRIG TY96 8.33KHZ, EGT, CHT
            </li>
            <li>

              TCAS, GPS BENDIX/KING KMD 150/STORMSCOPE,
            </li>
            <li>

              JPI FUEL SCAN 450, XPDR S
            </li>
          </ul>
          </p>
        </div>


      </div>
      <div class="card" style="width: 30rem;">
        <img class="card-img-top" src="../imagens/vh.jpg" alt="vh" style="width:100%">
        <div class="card-body">
          <h2 class="card-title">PIPER PA-18-150 SUPER CUB</h2>
          <p class="card-text">
            <strong>Engine:</strong>
            LYCOMING O-320 150CV @2700RPM
            <br>
            <strong>Fuel Capacity:</strong>
            36 USGAL
            <br>
            <strong>MTOW:</strong>
            794KG
            <br>
            <strong>Seats:</strong>
            2
            <br>
            <strong>Avionic/Instruments:</strong>
          </p>
          <ul>
            <li>

              NARCO XPDR MODE C , RADIO 25KHZ
            </li>
          </ul>
          </p>
        </div>
      </div>
    </div>

  </div>


@endsection
