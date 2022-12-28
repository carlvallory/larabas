@extends('layouts.frontend')
@section('content')
 
<!--contenido about-->

<div class="container">

  <!--portada-->
  <div class="portada-about overflow-hidden" style="background-image: url(img/nosotros.jpg);">
    <div class="cover-portada">
      <h2 class="text-white w-100 text-center">Quienes somos</h2>
      <p class="f-2 text-white fs-bolt w-75 mx-auto text-center">Somos una empresa con más de 60 años de trayectoria que tiene la misión de consolidarse como una empresa lider en el mercado inmobiliario. </p>
    </div>  
  </div>

  <!--Texto primario-->

  <p class="fs-5 mt-5">Abas dio sus primeros pasos en el negocio inmobiliario ya en el década de los 60, cuando su fundador, Don Elías Abraham Saba, adquirió 100 hectáreas en un zona que en aquel entonces era rural y que hoy conocemos como Ciudad del Este. En esa oportunidad, que Don Saba presentó su primer proyecto de urbanización que incluía la creación de calles, plazas, edificios públicos y viviendas.
  </p>

  <!--texto secundario-->
  <p class="fs-6 mt-4 text-secondary">Cuando en los años 70, dicha zona experimentó un crecimiento explosivo, lo que en años anteriores había sido una gran visión se convirtió en un empredimiento económico que daría grandes frutos en los tiempos por venir. En 1973, se construye el primer edificio de departamentos en Ciudad del Este: es el edificio Elias A. Saba</p>

  <!--imagen triple-->

  <div class="row mt-5">
    <div class="col-md-4 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
    <div class="col-md-4 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
    <div class="col-md-4 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
  </div>

  <h2 class="mt-5 text-center">Misión</h2>
  <!--texto secundario-->
  <p class="fs-6 mt-4 text-secondary">Consolidarnos como una de las empresas Inmobiliarias lideres en el mercado paraguayo, con el compromiso de proveer una atención personal de absoluta calidad a nuestros clientes.</p>

  <!--imagen doble-->

  <div class="row mt-5">
    <div class="col-md-6 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
    <div class="col-md-6 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
  </div>

  <h2 class="mt-5 text-center">Visión</h2>
  <!--texto secundario-->
  <p class="fs-6 mt-4 text-secondary">Lograr a través de nuestro trabajo y trato diario la completa satisfacción de nuestros clientes, convirtiéndonos en la empresa inmobiliara referente en el mercado en loteamientos, ventas y alquileres.</p>

  <!--imagen simple-->

  <div class="row mt-5">
    <div class="col-md col">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
  </div>

</div>

<!--fin contenido about-->

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