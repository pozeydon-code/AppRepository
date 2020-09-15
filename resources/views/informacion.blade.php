@extends('layouts.headerNavBar')
@section('content')
        <header>
          <nav class="var">
            <div class="logo">
              <a href="{{ route("index") }}" class="botonInicio">Pozeydon</a>
            </div>
            <ul class="nav-links">
              <li>
                <a class="subrayado" href="{{ route("index") }}">Home</a>
              </li>
              <li>
                <a class="subrayado sb" href="{{ route("about") }}">Acerca de Nosotros</a>
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
        <!-- cuadros de informacion-->
        <section class="espacios">
          <div class="container">
            <hi class="heading">Conoce a nuestro maravilloso Equipo</hi>
            <div class="card-wrapper">
              <!-- Francisco Herrera-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="<?php echo asset('multimedia/perfil/herrera.png')?>" alt="profile image " class="profile-img" />
                <h1>Francisco Herrera</h1>
                <p class="job-tittle">Desarrollador</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/francisco.herrera.7106"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/pozeydon_ecu/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Esteban Ausay-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="<?php echo asset('multimedia/perfil/ausay.png')?>" alt="profile image " class="profile-img" />
                <h1>Esteban Ausay</h1>
                <p class="job-tittle">Desarrollador</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/Isaco.yagami"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/isaco_/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Andres Velata-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="{{ asset('\multimedia\perfil\velata.png') }}" alt="profile image " class="profile-img" />
                <h1>Andres Velata</h1>
                <p class="job-tittle">Analista</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/Andrew941"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/andres_velata/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Wellington Medina-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="{{ asset('\multimedia\perfil\medina.png') }}" alt="profile image " class="profile-img" />
                <h1>Wellington Medina</h1>
                <p class="job-tittle">Desarrollador</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/welinton.medina.90"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/wellinton_medina_wm/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Cesar Luna-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="{{ asset('\multimedia\perfil\luna.png') }}" alt="profile image " class="profile-img" />
                <h1>Cesar Luna</h1>
                <p class="job-tittle">Desarrollador</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/cesar.d.luna.5"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/davidluna24/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Dylan Jaramillo-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="{{ asset('\multimedia\perfil\jaramillo.png') }}" alt="profile image " class="profile-img" />
                <h1>Dylan Jaramillo</h1>
                <p class="job-tittle">Analista</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/dylan.jaramillosoria"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/dylan_ajs/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Mauricio Nuñez-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="{{ asset('\multimedia\perfil\nuñez.png') }}" alt="profile image " class="profile-img" />
                <h1>Mauricio Nuñez</h1>
                <p class="job-tittle">Analista</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/profile.php?id=100022571647333"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
              <!-- Carlos Rosado-->
              <div class="card">
                <img src="<?php echo asset('multimedia/perfil/Por el dia del padre.jpg')?>" alt="card background" class="card-img" />
                <img src="{{ asset('\multimedia\perfil\rosado.png') }}" alt="profile image " class="profile-img" />
                <h1>Carlos Rosado</h1>
                <p class="job-tittle">Analista</p>
                <p class="about">Estudiante de Ingeniería en Tecnologías de la Información, 5to semestre de la Universidad Nacional de Chimborazo</p>
                <a href="{{ route('contact')}}" class="btn">Contacto</a>
                <ul class="social-media">
                  <li>
                    <a href="https://www.facebook.com/carlitosw5"><i class="fab fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/cw5_five/?hl=es-la"><i class="fab fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- texto que ira en el body-->
    
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
@endsection
