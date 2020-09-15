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
            <a href="" class="botonInicio">Pozeydon</a>
          </div>
          <ul class="nav-links">
            <li class="tr">
              <a class="subrayado sb" href="">Home</a>
            </li>
            <li class="tr">
              <a class="subrayado" href="">Acerca de Nosotros</a>
            </li>
            <li class="tr">
              <a class="subrayado" href="">Contáctanos</a>
            </li>
            <li class="tr">
              <a class="subrayado" href="<?php echo route("register") ?>">Regístrate</a>
            </li>
            <li class="tr">
              <a href="<?php echo route("login") ?>" class="button-primary" style="font-size: 17px">Iniciar Sesión</a>
            </li>
          </ul>
          <div class="mas-opciones">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
        </nav>
      </header>
  </body>
</html>