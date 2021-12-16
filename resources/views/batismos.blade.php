@extends('layout.master')

@section('content')

<div id="corpo">

    <div class="containerPrincipal1">
        <!--<img src="img/avvvvvv.jpg" alt="">-->
        <div class="header1">
            <img src="img/ggggggg.png" alt="">


        </div>
    </div>
    <div class="navbar1">
        @foreach($servicos as $servico)
            <h2>{{ $servico->descricao }}</h2>
            <p>{!! $servico->mais_info !!}</p>
            @foreach($servico->imagens as $imagem)
                <img src="{{ asset('storage/img_servicos/' . $imagem->nome) }}" width="100%">
            @endforeach
        @endforeach
    </div>

    <img src="img/batismos.jpg" alt="">

</div>

@endsection
