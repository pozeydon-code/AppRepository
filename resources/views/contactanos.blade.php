<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo asset('css/style_contactanos.css')?>" />
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" />
    <title>Contactanos</title>
  </head>
  <body>
    <header>
      <nav class="var">
        <div class="logo">
          <a href="{{ route("index") }}" class="botonInicio">Pozeydon</a>
        </div>
        <ul class="nav-links">
          <li class="tr">
            <a class="subrayado" href="{{ route("index") }}">Home</a>
          </li>
          <li>
            <a class="subrayado" href="{{ route("about") }}">Acerca de Nosotros</a>
          </li>
          <li>
            <a class="subrayado sb" href="{{ route("contact") }}">Contáctanos</a>
          </li>
          <li>
            <a class="subrayado " href="{{ route('register') }}">Regístrate</a>
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
    <section class="container">
      <div class="Contenedor">
        <div class="InfoContacto">
          <div>
            <h2>Informacion de Contacto</h2>
            <ul class="Info">
              <li>
                <span><img src="{{ asset('/multimedia/Contactanos/ubicacion.png') }}" /></span>
                <span>Av. Antonio José de Sucre<br />Km 1 1/2 vía a Guano</span>
              </li>
              <li>
                <span><img src="{{ asset('multimedia/Contactanos/correo.png') }}" /></span>
                <span>Pozeydon@gmail.com</span>
              </li>
              <li>
                <span><img src="{{ asset('/multimedia/Contactanos/telefono.png') }}" /></span>
                <span>1800-Pozeydon</span>
              </li>
            </ul>
          </div>
          <ul class="redes">
            <li>
              <a href="https://www.facebook.com/Andrew941"><img src="{{ asset('/multimedia/Contactanos/facebook.png') }}" /></a>
            </li>
            <li>
              <a href="https://www.instagram.com/andres_velata/?hl=es-la"><img src="{{ asset('/multimedia/Contactanos/instagram.png') }}" /></a>
            </li>
            <li>
              <a href="https://twitter.com/Andrew_Velata"><img src="{{ asset('/multimedia/Contactanos/twitter.png') }}" /></a>
            </li>
          </ul>
        </div>
        <form class="contactoForm" method="POST" action="{{url('send')}}">
          {{ csrf_field() }}
          <h2>Envia un Mensaje</h2>
          <div class="formBox">
            <div class="inputBox w50">
              <input type="text" name="name" required />
              <span>Nombre</span>
            </div>
            <div class="inputBox w50">
              <input type="text" name="apellido" required />
              <span>Apellido</span>
            </div>
            <div class="inputBox w50">
              <input type="email" name="email" required />
              <span>Correo Electronico</span>
            </div>
            <div class="inputBox w50">
              <input type="text" name="telefono" required />
              <span>Numero de Telefono</span>
            </div>
            <div class="inputBox w100">
              <textarea name="message" required></textarea>
              <span>Escribenos Tu Sugerencia</span>
            </div>
            <div class="inputBox w100">
              <input type="submit" name="send" value="Enviar" />
            </div>
          </div>
        </form>
      </div>
    </section>
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
    <script src="{{ asset('/js/scripts.js') }}"></script>
  </body>
</html>
