  <nav class="navbar navbar-inverse" style="position:fixed;top:0;width:100%;z-index:9999">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{route('aeroclube.index')}}"><img src="{{asset('img/logo.png')}}" alt="logo" style="width:75px;display:inline-block;margin-right:5px;">Aeroclube de Leiria</a>
      </div>
      <ul class="nav navbar-nav">
        <li> <a href="{{route('aeroclube.index')}}">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Serviços <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('aeroclube.batismos')}}">Batismos</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>

        <li><a href="{{route('aeroclube.frota')}}">Frota</a></li>
        <li><a href="{{route('aeroclube.missao')}}">Missão</a></li>
        <li><a href="{{route('aeroclube.faq')}}">FAQs</a></li>
        <li><a href="{{route('aeroclube.contacts')}}">Contacts</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Loja</a></li>
        <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>
