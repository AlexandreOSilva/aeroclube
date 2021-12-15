<link rel="stylesheet" href={{asset("https://www.w3schools.com/w3css/4/w3.css")}}>
<link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Raleway")}}>
<link rel="stylesheet" href={{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}>
<link rel="stylesheet" href={{asset('css/Home.css')}}>

@extends('layout.master')
@section('title', 'Aero Clube de Leiria - Home')

@section('content')

<!-- Header with full-height image -->

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">fq  wefqweStart something that matters</span><br>
      <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
      <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
    </div>
    <div class="w3-display-bottomleft w3-text-white w3-large" style="padding:24px 48px">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </header>


  <!-- Promo Section - "We know design" -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>Quem somos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
        <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> Mais info</a></p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="img/Batismodevoo/b1.jpg" alt="Buildings" width="700" height="394">
      </div>
    </div>
  </div>
  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
      <h3 class="w3-center">Objetivo</h3>
      <p class="w3-center w3-large">Key features of our company</p>
      <div class="w3-row-padding w3-center" style="margin-top:64px">
        <div class="w3-quarter">
          <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
          <p class="w3-large">Responsive</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
          <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
          <p class="w3-large">Passion</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
          <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
          <p class="w3-large">Design</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
        <div class="w3-quarter">
          <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
          <p class="w3-large">Support</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
      </div>
    </div>


@endsection
