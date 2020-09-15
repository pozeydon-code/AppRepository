<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stgylesheet" />
    @yield('encabezado')

    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" />
    <script src="{{ asset('/jqwery/jquery-3.5.1.min.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />

    <title>NamePage</title>
  </head>
  <body>

    @yield('content')
    
  </body>
</html>
