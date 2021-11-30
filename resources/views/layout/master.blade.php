<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')}}">
  <link rel='stylesheet' href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">

  <title>@yield('title')</title>

</head>


<body>

  @include('layout.partials.nav')
 @yield('content')



  @include('layout.partials.footer')
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}" ></script>
  <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}" ></script>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')}}"></script>
</body>

</html>
