<link rel="stylesheet" href={{asset("https://www.w3schools.com/w3css/4/w3.css")}}>
<link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Raleway")}}>
<link rel="stylesheet" href={{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}>

@extends('layout.master')
@section('title', 'Aero Clube de Leiria - Missao')

@section('content')

    <div class="w3-container" style="padding:128px 16px" id="about">
        @if (count($missao))
        @foreach ($missao as $missao)
        <h3 class="w3-center w3-xxxlarge">A nossa Missão</h3>
        <p class="w3-center w3-large">{{$missao->texto}}</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-third">
                <i class="fa fa-briefcase w3-margin-bottom w3-margin-top w3-jumbo w3-center" style="color: #F9D342; text-shadow: 4px 3px black;"></i>
                <p class="w3-large">Profissionalismo</p>
                <p>{{$missao->prof}}</p>
            </div>
            <div class="w3-third espbai">
                <i class="fa fa-star w3-margin-bottom w3-margin-top w3-jumbo" style="color: #F9D342; text-shadow: 5px 3px black;"></i>
                <p class="w3-large">Dedicação</p>
                <p>{{$missao->dedi}}</p>
            </div>
            <div class="w3-third espbai">
                <i class="fa fa-shield w3-margin-bottom w3-margin-top w3-jumbo" style="color: #F9D342; text-shadow: 5px 3px black;"></i>
                <p class="w3-large">Coragem</p>
                <p>{{$missao->cora}}</p>
            </div>
            <div class="w3-third">
                <i class="fa fa-trophy w3-margin-bottom w3-margin-top w3-jumbo" style="color: #F9D342; text-shadow: 5px 3px black;"></i>
                <p class="w3-large">Esforço</p>
                <p>{{$missao->esf}}</p>
            </div>
            <div class="w3-third">
                <i class="fa fa-bullseye w3-margin-bottom w3-margin-top w3-jumbo" style="color: #F9D342; text-shadow: 3px 3px black;"></i>
                <p class="w3-large">Perfecionismo</p>
                <p>{{$missao->perf}}</p>
            </div>
            <div class="w3-third">
                <i class="fa fa-home w3-margin-bottom w3-margin-top w3-jumbo" style="color: #F9D342; text-shadow: 5px 3px black;"></i>
                <p class="w3-large">Familia</p>
                <p>{{$missao->fam}}</p>
            </div>
        </div>
        @endforeach
        @else
        <p>KKK</p>
        @endif
    </div>


@endsection
