<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style_registro.css')?>" />
    <!-- Titulo de pagina-->
    <title>Inicio de sesión</title>
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
            <a class="subrayado" href="{{ route('register') }}">Regístrate</a>
          </li>
          <li>
            <a href="{{ route('login') }}" class="button-primary sb-login" style="font-size: 17px;">Iniciar Sesión</a>
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
                <h2 class="title">Inicio de Sesión</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="formulario__grupo formulario__grupo-terminos" id="grupo__correo">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>
                        <div class="formulario__grupo-input">
                            <input id="email" type="email" class="formulario__input input--style-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="formulario__grupo formulario__grupo-terminos" id="grupo__password">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                        <div class="formulario__grupo-input">
                            <input id="password lleno" type="password" class="formulario__input input--style-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="formulario__btn">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            </div>
        </div>
        </div>
    </main>

    <script src="{{ asset('/js/formulario.js') }}"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  </body>
</html>