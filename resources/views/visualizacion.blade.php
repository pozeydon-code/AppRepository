<?php 
 $respuesta=Http::get('https://api.elsevier.com/content/search/scopus?query=AUTHLASTNAME('.Auth::user()->nombreUsuario.'-'.Auth::user()->apellidoUsuario.')&apiKey=2abff0e247851af7765a6ed4ffa29786');
 $posts=$respuesta->json();
 $publicaciones=$posts['search-results']['opensearch:totalResults'];
 $publi=(int)$publicaciones;
 $i=(int)0;
 $libros=$posts['search-results']['entry'];
 /*function libros($indice){
  $titulo=$posts['search-results']['entry']['$indice']['dc:title'];
  return $titulo
 }
 echo "<pre>";
    print_r($posts);
    
    echo "</pre>";*/
?>


@extends('layouts.headerNavBar')

@section('encabezado')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@endsection

@section('content')
    <header>
      <nav>
        <div class="logo">
          <a href="index after login.html" class="botonInicio">Pozeydon</a>
        </div>
        <ul class="nav-links">
          <li class="buscar-caja" style="margin-bottom: 20px;">
            <input type="text" name="" class="buscar-txt" placeholder="Buscar..." />
            <a class="buscar-btn">
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </li>
          <li>
          <a class="subrayado sb" href="{{route('vistas')}}">Visualización</a>
          </li>
          <li>
            <a class="subrayado" href="{{route('acount')}}">{{ Auth::user()->nombreUsuario }} {{ Auth::user()->apellidoUsuario }} </a>
          </li>
          <li>
            <a href="{{ route('logout') }}" class="button-primary" style="font-size: 17px;" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Desconectar') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </li>
        </ul>
        <div class="mas-opciones">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
    <div class="container">
      <h1 style="color:white;">Listado de Articulos</h1>
      <h3 style="color:white;"><b>Investigador:</b> {{ Auth::user()->nombreUsuario }} {{ Auth::user()->apellidoUsuario}}</h3>
      <h3 style="color:white;"><b>Total de Articulos Publicados:</b> <?php echo $publicaciones?></h3>
      <div class="row">
      @for($i= 0;$i<$publi;$i++)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $libros[$i]['dc:title'];?></h5>
              <h6 class="card-subtitle md-2 text-muted">
                <b>Creador:</b> <?php echo $libros[$i]['dc:creator'];?>
              </h6>
              <p class="card-text"> <b>Lugar de Publicación:</b> <?php echo $libros[$i]['prism:publicationName'];?></p>
              <p class="card-text"> <b>ISSN:</b> <?php echo $libros[$i]['prism:issn'];?></p>
              <p class="card-text"> <b>Volumen:</b> <?php echo $libros[$i]['prism:volume'];?></p>
              <p class="card-text"> <b>Año de Publicación:</b> <?php echo $libros[$i]['prism:coverDisplayDate'];?></p>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div>



  
@endsection
