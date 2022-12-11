@extends('layouts.frontend')
@section('content')
 
<!--mapa-->

<!--mapa y contenido-->

<!--Busqueda-->

<div class="container mt-5">

<!--cabecera busqueda-->
<div class="row border-bottom">
  <div class="col-md-4">
    <h3 class="text-azul">Buscar una venta</h3>
  </div>
  <div class="col-md">
    <div class="row">
      <div class="col">
        <!--select-->
        <select class="form-select mb-4 border-0 rounded-4 w-100 bg-celeste text-azul">
          <option selected>Departamento</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="col text-center">
        <!--switch-->
        <div class="form-check form-switch">
          <input class="form-check-input" style="height: 35px; width: 70px; margin-top: 0;" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked">Mapa</label>
        </div>
      </div>
      <div class="col">
        <button type="button" class="btn boton-verde-buscador mb-4 rounded-4 w-100">Buscar</button>
      </div>
    </div>
  </div>
</div>

<!--mapa y contenido-->

<div class="row mt-5">
  <!--mapa-->
  <div class="col-md mb-5">
    <div class="overflow-hidden rounded-4">
      <img src="img/mapa-busqueda.jpg" width="100%">
    </div>
  </div>
  <!--contenido-->
  <div class="col-md">
    <div class="row">
      
      <div class="col-md-6 col-6 mb-3">
        <div class="overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none propiedad-checket" style="background-image: url(img/propiedad.jpg);">
        
          <div class="departamento-mapa">Central</div>
        
          <div class="caption-mapa">
            <p class="mb-0"><small><strong>Desde: $2.000</strong></small></p>
            <p class="mt-0 mb-0"><small>Quinta cerca del lago</small></p>
            <p class="mt-0 mb-0"><small><img src="img/ubi.svg"> Fernando de la mora</small></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-6 mb-3">
        <div class="overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none" style="background-image: url(img/propiedad.jpg);">
        
          <div class="departamento-mapa">Central</div>
          
          <div class="caption-mapa">
            <p class="mb-0"><small><strong>Desde: $2.000</strong></small></p>
            <p class="mt-0 mb-0"><small>Quinta cerca del lago</small></p>
            <p class="mt-0 mb-0"><small><img src="img/ubi.svg"> Fernando de la mora</small></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-6 mb-3">
        <div class="overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none" style="background-image: url(img/propiedad.jpg);">
        
          <div class="departamento-mapa">Central</div>
         
          <div class="caption-mapa">
            <p class="mb-0"><small><strong>Desde: $2.000</strong></small></p>
            <p class="mt-0 mb-0"><small>Quinta cerca del lago</small></p>
            <p class="mt-0 mb-0"><small><img src="img/ubi.svg"> Fernando de la mora</small></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-6 mb-3">
        <div class="overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none" style="background-image: url(img/propiedad.jpg);">
        
          <div class="departamento-mapa">Central</div>
         
          <div class="caption-mapa">
            <p class="mb-0"><small><strong>Desde: $2.000</strong></small></p>
            <p class="mt-0 mb-0"><small>Quinta cerca del lago</small></p>
            <p class="mt-0 mb-0"><small><img src="img/ubi.svg"> Fernando de la mora</small></p>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>

</div>

 <!--Buscador-->
 <div class="container">
  <div class="w-100 bg-white rounded-4 pt-5 pb-3 px-5 buscador">
    <div class="row">
      <div class="col-md col-6">
        <select class="form-select mb-4 border-0 rounded-4 w-100 bg-celeste text-azul">
          <option selected>Departamento</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="col-md col-6">
        <select class="form-select mb-4 border-0 rounded-4 w-100  bg-celeste text-azul">
          <option selected>Ciudad</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="col-md col-6">
        <select class="form-select mb-4 border-0 rounded-4 w-100 bg-celeste text-azul">
          <option selected>Categoría</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="col-md col-6">
        <select class="form-select mb-4 bg-celeste border-0 w-100 rounded-4 text-azul">
          <option selected>Categoría</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
      <div class="col-md col-6">
        <input class="form-control mb-4 bg-celeste rounded-4 border-0 text-azul" type="text" placeholder="Buscar">
      </div>
      <div class="col-md col-6">
        <button type="button" class="btn boton-verde-buscador mb-4 rounded-4 w-100">Buscar</button>
      </div>
    </div>
  </div>
</div>
<!--Fin buscador-->

<div class="container mt-5">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel-1">
    <div class="carousel-inner">
      <div class="carousel-item active hid-carrete">
        <div class="row">
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="text-secondary mb-0">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item hid-carrete">
        <div class="row">
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6 mb-3">
            <div class="propiedad overflow-hidden rounded-4 w-100 h-100 d-block text-decoration-none">
              <img src="img/propiedad.jpg" class="rounded-top-4" width="100%">
              <div class="departamento">Central</div>
              <div class="disponible">Disponible 2</div>
              <div class="w-100 mt-4 mb-2" style="height:1px;"></div>
              <div class="row w-100 m-2">
                <div class="col-md">
                  <h5 class="mb-1 text-secondary">Desde: <span class="precio">$2.000</span></h5>
                  <p class="mt-3 mb-0 text-dark">Quinta cerca del lago</p>
                  <small class="text-secondary mt-2 mb-4"> <img src="img/ubi.svg"> Fernando de la mora</small>
                </div>
                <div class="col-md-4">
                  <a href="#" class="ir"><img src="img/arrow-ir.svg" class="arrow-ir"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--fin busqueda-->


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