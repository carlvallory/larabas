@extends('layouts.frontend')
@section('content')
 

<!--contenido about-->

<div class="container">

  <!--portada-->
  <div class="portada-about overflow-hidden" style="background-image: url(img/nosotros.jpg);">
    <div class="cover-portada">
      <h2 class="text-white w-100 text-center">Quienes somos</h2>
      <p class="f-2 text-white fs-bolt w-75 mx-auto text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>  
  </div>

  <!--Texto primario-->

  <p class="fs-5 mt-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <!--texto secundario-->
  <p class="fs-6 mt-5 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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

  <!--texto secundario-->
  <p class="fs-6 mt-5 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

  <!--imagen doble-->

  <div class="row mt-5">
    <div class="col-md-6 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
    <div class="col-md-6 col-3">
      <img src="img/nosotros.jpg" width="100%" class="rounded-4">
    </div>
  </div>

  <!--texto secundario-->
  <p class="fs-6 mt-5 text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

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