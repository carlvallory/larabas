@extends('layouts.frontend')
@section('content')
 
<!--contenido solicitud -->

<div class="container mt-5">

  <h3 class="text-center text-verde w-100">Ofrezca su propiedad</h3>

  <p class="text-center fs-5 col-9 mx-auto mt-4 mb-5 d-block text-secondary">Si desea ofrecer en venta alguna propiedad para futuros Loteamientos o Desarrollos Inmobiliarios, le invitamos a completar el siguiente formulario. En la brevedad nos pondremos en contacto con usted. <strong>¡Su oferta nos interesa!</strong></p>

  <!--separador-->
  <div class="w-100 border-top mb-5"></div>

  <!--Formulario-->
  <form class="row g-3">
    <div class="w-100"><h3 class="text-azul">Datos personales</h3></div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nombre y Apellido *</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Número de cédula *</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Número de teléfono o celular *</label>
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Celular</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Celular</a></li>
          <li><a class="dropdown-item" href="#">Línea Alta</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>
    </div>

    <div class="col-6">
      <label for="inputAddress2" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="inputAddress2" placeholder="usuario@email.com">
    </div>

    <!--separador-->
    <div class="w-100 border-top mt-5 mb-4"></div>

    <div class="w-100"><h3 class="text-azul">Datos del inmueble</h3></div>

    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Tamaño de la propiedad *</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">Distrito *</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Precio por Hectárea</label>
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Gs</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Gs</a></li>
          <li><a class="dropdown-item" href="#">Us</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>
    </div>
    <div class="col-6">
      <label for="inputAddress" class="form-label">Precio Total de la Propiedad</label>
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Gs</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Gs</a></li>
          <li><a class="dropdown-item" href="#">Us</a></li>
        </ul>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
      </div>
    </div>

    <div class="col-12">
      <label for="exampleFormControlTextarea1" class="form-label">Dirección</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escriba aquí la dirección de la propiedad." rows="3"></textarea>
    </div>
    <div class="col-12">
      <label for="exampleFormControlTextarea1" class="form-label">Descripción de la propiedad</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Indique como es su propiedad." rows="3"></textarea>
    </div>
    <div class="col-6 mt-5">
      <button type="submit" class="btn boton-azul w-100"> <span class="text-white">¿Desea ubicar su propiedad?</span></button>
    </div>
    <div class="col-6 mt-5">
      <button type="submit" class="btn boton-verde w-100">Enviar</button>
    </div>
  </form>
  
</div>

<!--fin contenido solicitud-->


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