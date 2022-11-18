@extends('layouts.frontend')
@section('content')
 



<!--espaciador-->
<div class="w-100 py-5"></div>

<!--footer-->
<div class="w-100 bg-gris-claro text-gris-oscuro">

  <div class="container">
    <div class="row pt-5 mb-4">
      <div class="col-md">
        <img src="img/logo-abas-gris.png" class="logo-footer">

        <ul>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#"><img src="img/mail.svg"> hola@abas.com.py </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#"><img src="img/phone.svg"> +595 - 21 234 725</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#"><img src="img/point.svg"> Avda. Mcal. Lopez 2030</a>
            </li>
          </ul>
        </ul>
      </div>

      <div class="col-md borde-footer">
        <ul>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Promociones especiales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Proyectos vigentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Responsabilidad Social</a>
            </li>
          </ul>
        </ul>
        
      </div>
      <div class="col-md borde-footer">
        <ul>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Proyectos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Blog</a>
            </li>
          </ul>
        </ul>
      </div>
      <div class="col-md borde-footer">
        <ul>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gris-oscuro" href="#">Sucursales</a>
            </li>
          </ul>
        </ul>
        <div class="w-100 mt-3 d-block ms-5">
          <a href="#" class="social"><img src="img/fb.svg"></a>
          <a href="#" class="social"><img src="img/tw.svg"></a>
          <a href="#" class="social"><img src="img/ig.svg"></a>
          <a href="#" class="social"><img src="img/yt.svg"></a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="w-100 bg-gris-oscuro text-center py-4">
    Copyright © 2019. Todos los derechos reservados.
  </div>
</div>
  <script src="js/jquery-3.6.1.min.js"></script>
  <!--Bootstrap js-->
  <script src="js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
@endsection