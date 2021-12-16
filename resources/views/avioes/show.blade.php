@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do avião
            </div>
            <div class="card-body">
                @if ($aviao->imagem)
                    <div>
                        <img alt="AVIAO imagem" width="250" src="{{ asset('storage/img_avioes/' . $aviao->imagem) }}">
                    </div>

                @endif
                <div><strong>Nome:</strong> {{ $aviao->nome }} </div>
                <div><strong>Kilómetros realizados:</strong> {{ $aviao->kmsrealizados }} </div>
                <div><strong>Nº Litros:</strong> {{ $aviao->n_litros }} </div>
                <div><strong>Lugares:</strong> {{ $aviao->total_poltronas }} </div>
                <div><strong>Fornecedores:</strong> {{ $aviao->fornecedores }} </div>


            </div>
        </div>
    </div>
@endsection
