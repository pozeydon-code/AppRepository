<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo asset('css/estilos.css')?>" />
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
            <a class="subrayado" href="{{ route("contact") }}">Contáctanos</a>
          </li>
          <li>
            <a class="subrayado sb" href="{{ route('register') }}">Regístrate</a>
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
      
<main>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100">
      <div class="wrapper wrapper--w680">
        <div class="card card-4 card-body">
          <div class="card-body">
            <h2 class="title">Registro</h2>

            <form method="POST" action="{{ route('register') }}" novalidate>
                @csrf

              {{-- nombre --}}
              <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombreUsuario" class="formulario__label">{{ __('Nombre') }}</label>

                <div class="formulario__grupo-input">
                    <input id="nombreUsuario" type="text" class="formulario__input input--style-4 @error('nombreUsuario') is-invalid @enderror" name="nombreUsuario" value="{{ old('nombre') }}" required autocomplete="nombreUsuario" autofocus>
                </div>
              </div>

              {{-- apellido --}}
              <div class="formulario__grupo" id="grupo__nombre">
                <label for="apellidoUsuario" class="formulario__label">{{ __('Apellido') }}</label>

                <div class="formulario__grupo-input">
                    <input id="apellidoUsuario" type="text" class="formulario__input input--style-4 @error('apellidoUsuario') is-invalid @enderror" name="apellidoUsuario" value="{{ old('apellido') }}" required autocomplete="apellidoUsuario" autofocus>
                </div>
              </div>

              {{-- cedula --}}
              <div class="formulario__grupo" id="grupo__nombre">
                <label for="cedula" class="formulario__label">{{ __('Cedula') }}</label>

                <div class="formulario__grupo-input">
                    <input id="cedula" type="text" class="formulario__input input--style-4 @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>
                </div>
              </div>

              {{-- email --}}
              <div class="formulario__grupo">
                <label for="email" class="formulario__label">{{ __('Correo Electronico') }}</label>

                <div class="formulario__grupo-input">
                    <input id="email" type="email" class="formulario__input input--style-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>



              {{-- contraseña --}}
              <div class="formulario__grupo">
                <label for="password" class="formulario__label">{{ __('Contraseña') }}</label>

                <div class="formulario__grupo-input">
                    <input id="password" type="password" class="formulario__input input--style-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="formulario__grupo">
                <label for="password-confirm" class="formulario__label">{{ __('Confirmar Contraseña') }}</label>

                <div class="formulario__grupo-input">
                    <input id="password-confirm" type="password" class="formulario__input input--style-4" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <br>
            <br>
            <div class="formulario__grupo formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn">
                    {{ __('Registrar') }}
                </button>
            </div>            
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo asset('/js/formulario.js')?>"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  </body>
</html>
