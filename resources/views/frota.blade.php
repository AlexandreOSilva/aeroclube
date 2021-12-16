
<link rel="stylesheet" href={{asset("https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css")}}>
<link rel='stylesheet' href={{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css')}}>
<link rel="stylesheet" href={{asset("css/frota.css")}}>
<link rel="stylesheet" href={{asset("css/style.css")}}>
<link rel="stylesheet" href={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css")}}>
<script src={{asset("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js")}}></script>
<script src={{asset("https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js")}}></script>

@extends('layout.master')
@section('title', 'Aero Clube de Leiria - Frota')

@section('content')

<div id="corpo">


    <div class="frota">
      <h1>Frota</h1>
    </div>





    <div class="flex-wrap d-flex justify-content-center">
        @foreach ($avioes as $aviao)


      <div class="card" style="width: 30rem;">
        <img class="card-img-top" src="{{asset('storage/img_avioes/'.$aviao->imagem)}}" alt="img avião" style="width:100%">
        <div class="card-body">
          <h2 class="card-title">{{strtoupper($aviao->nome)}}</h2>
          <p class="card-text">
            <strong>Fornecedores:</strong>
            {{strtoupper($aviao->fornecedores)}}
            <br>
            <strong>Nº de litros:</strong>
            {{strtoupper($aviao->n_litros)}}
            <br>
            <strong>Kms realizados:</strong>
            {{strtoupper($aviao->kmsrealizados)}}
            <br>
            <strong>Lugares:</strong>
            {{strtoupper($aviao->total_poltronas)}}
            <br>

          </p>

          </p>
        </div>
      </div>

      @endforeach

      </div>
    </div>

  </div>

  <script src={{asset('https://code.jquery.com/jquery-2.2.4.min.js')}}></script>
  <script src={{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}></script>
  <script src={{asset('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')}}></script>

@endsection
