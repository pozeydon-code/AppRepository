<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo asset('css/style_contactanos.css')?>" />
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" />
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
    crossorigin="anonymous"
    />
    <title>Contactanos</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <a href="{{('')}}" class="botonInicio">Pozeydon</a>
        </div>
        <ul class="nav-links">
          <li class="buscar-caja" style="margin-bottom: 20px;">
            <input type="text" name="" class="buscar-txt" placeholder="Buscar..." />
            <a class="buscar-btn" href="">
              <i class="fa fa-search" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a class="subrayado" href="{{route('vistas')}}">Visualizacion</a>
          </li>
          <li>
            <a class="subrayado sb" href="{{ route('acount') }}">{{ Auth::user()->nombreUsuario }} {{ Auth::user()->apellidoUsuario }} </a>
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

    <section class="container">
      <div class="Contenedor">
        <div class="InfoContacto">
          <div>
            <h2>Informacion de Contacto de los Desarrolladores para mas Ayuda</h2>
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
          <h2>Editar Perfil</h2>
          <div class="formBox">
            <div class="inputBox w50">
              <p style="text-align: right">{{ __('Nombre: ') }}</p>
              <input type="text" name="name" required />
              <span>{{ Auth::user()->nombreUsuario }}</span>
            </div>
            <div class="inputBox w50">
              <p style="text-align: right">{{ __('Apellido: ') }}</p>
              <input type="text" name="apellido" required />
              <span>{{ Auth::user()->apellidoUsuario }}</span>
            </div>
            <div class="inputBox w50">
              <p style="text-align: right">{{ __('Cedula: ') }}</p>
              <input type="text" name="cedula" required />
              <span>{{ Auth::user()->cedula }}</span>
            </div>
            <div class="inputBox w50">
              <p style="text-align: right">E-mail</p>
              <input type="email" name="email" required />
              <span>{{ Auth::user()->email }}</span>
            </div>
            <div class="inputBox w100">
              <input type="submit" name="send" value="Enviar" />
            </div>
          </div>
        </form>
      </div>
    </section>
    
    <script src="{{ asset('/js/scripts.js') }}"></script>
  </body>
</html>

