@extends('layouts.headerNavBar')

@section('content')
<header>
  <nav class="var">
    <div class="logo">
      <a href="{{ route("index") }}" class="botonInicio">Pozeydon</a>
    </div>
    <ul class="nav-links">
      <li class="tr">
        <a class="subrayado sb" href="{{ route("index") }}">Home</a>
      </li>
      <li>
        <a class="subrayado" href="{{ route("about") }}">Acerca de Nosotros</a>
      </li>
      <li>
        <a class="subrayado" href="{{ route("contact") }}">Contáctanos</a>
      </li>
      <li>
        <a class="subrayado" href="{{ route('register') }}">Regístrate</a>
      </li>
      <li>
        <a href="{{ route('login') }}" class="button-primary" style="font-size: 17px;">Iniciar Sesión</a>
      </li>
    </ul>
    <div class="mas-opciones">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
</header>
<!-- texto que ira en el body-->
<div class="container">
  <h1 style="text-align:center; color: white; text-decoration: underline">Repositorio Digital</h1>
  <br>
  <br />
  <section class="fondo">
    <!-- Banner-->
    <div id="c-slider">
      <div id="slider">
        <section>
          <img src="<?php echo asset('multimedia/1.jpg')?>" />
        </section>
        <section>
          <img src="<?php echo asset('multimedia/1.1.jpg')?>" />
        </section>
        <section>
          <img src="<?php echo asset('multimedia/2.jpg')?>" />
        </section>
        <section>
          <img src="<?php echo asset('/multimedia/2.1.jpg')?>" />
        </section>
        <section>
          <img src="<?php echo asset('/multimedia/3.jpg')?>" />
        </section>
        <section>
          <img src="<?php echo asset('/multimedia/3.1.jpg')?>" />
        </section>
        <section>
          <img src="<?php echo asset('/multimedia/4.jpg')?>" />
        </section>
      </div>
      <div id="btn-anterior"><p>&lt</p></div>

      <div id="btn-siguiente"><p>&gt</p></div>
    </div>
  </section>
  <br />
  <br />
</div>

<section class="dolor"></section>

<div class="container">
  <h1 style="text-align:center; color: white;">Acerca del Proyecto</h1>
  <div class="contenedor-servicio">
    <img src="<?php echo asset('/multimedia/ilustracion1.svg')?>" alt="imagen_ilustracion" class="imagen-servicio" />
    <div class="contenido-texto">
      <br />
      <br />
      <br />
      <br />
      <br />
      <div class="caja-destacada">
        <h3><span>1</span> Implementacion confiable</h3>
        <p>Desarrollo de Información que apoya a docentes y estudiantes para impulsar la investigacion y consultas bibliograficas</p>
      </div>
      <div class="caja-destacada">
        <h3><span>2</span> Consula de Articulos</h3>
        <p>
        Puedes visualizar los articulos científicos que tienes publicados en la Base de datos de Scopus.
        </p>
      </div>
      <div class="caja-destacada">
        <h3><span>3</span>Desarrollo</h3>
        <p>
          Pozeydon esta realizada con las tecnologias de HTML 5 y Laravel para una app web para que puedas acceder desde tu navegador de preferencia.
        </p>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo asset('/js/scripts.js')?>"></script>
</body>
<footer>
<div class="contenedor-footer">
  <div class="content-foo">
    <h4>Phone</h4>
    <p>+593 0969064674</p>
  </div>
  <div class="content-foo">
    <h4>Email</h4>
    <p>TicGroup@gmail.com</p>
  </div>
  <div class="content-foo">
    <h4>Location</h4>
    <p>Ecuador/Pichincha</p>
  </div>
</div>
<h2 class="titulo-final">&copy; Quinto Design | TICGROUP</h2>
</footer>
</html>

@endsection
