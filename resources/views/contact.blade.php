@extends('layouts.frontend')
@section('content')
 
<!--contacto-->

<div class="container-fluid">

  <div class="row">
    <div class="col col-md-2 col-lg-2 d-none d-sm-block">
      <ul class="list-unstyled m-5 p-5">
        <li>
          <a href="#" class="social"><img src="img/fb.svg"></a>
        </li>
        <li>
          <a href="#" class="social"><img src="img/tw.svg"></a>
        </li>
        <li>
          <a href="#" class="social"><img src="img/ig.svg"></a>
        </li>
        <li>
          <a href="#" class="social"><img src="img/yt.svg"></a>
        </li>
      </ul>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-4 mt-5">
      <h3 class="text-azul">Contacto</h3>

      <p class="fs-5 text-secondary">Dejanos tus consultas o sugerencias, nuestro equipo se comunicará contigo en la brevedad posible</p>

      <!--formulario-->
      <form class="row g-3 mt-5">
        <div class="col-md-6">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Teléfono o celular</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="098 ..">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Correo electróico</label>
          <input type="email" class="form-control" id="inputAddress2" placeholder="usuario@email.com">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Asunto</label>
          <select id="inputState" class="form-select">
            <option selected>Seleccionar...</option>
            <option>...</option>
          </select>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Quiero recibir ofertas y novedades
            </label>
          </div>
        </div>

        <div class="col-12">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Consulta o sugerencia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn bg-verde">Enviar mensaje</button>
        </div>
      </form>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-6 pt-5 pt-sm-0 pe-sm-0">
      <img src="{{asset('img/contact.jpg')}}" class="img-fluid d-sm-none" alt="...">
      <img src="{{asset('img/contact.jpg')}}" class="d-none d-sm-block" height="90%" alt="...">
    </div>
  </div>
  <!--fin formulario-->
</div>

<!--espaciador-->
<div class="w-100 py-5"></div>


@endsection

@push('scripts')
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="https://unpkg.com/popper.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
@endpush