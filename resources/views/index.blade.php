@extends('layouts.frontend')
@section('content')
 

<!--Portada-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

  <div class="carousel-inner">
    <!--Portada 1-->
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md bg-azul text-white m-0 p-0">
          <div class="caption carousel-caption-caption">
            <h2 data-animation="animated bounceInLeft">TU LOTE MÁS CERCA</h2>
            <h3 data-animation="animated bounceInLeft">Brisas de Pedrozo</h3>
            <p class="mt-4 p-box" data-animation="animated bounceInLeft">Ubicado en Pedrozo a metros de ruta 2 y con calles de acceso empedradas y energía eléctrica en la fracción.</p>

            <a href="#" class="boton-verde mt-4" data-animation="animated bounceInLeft">Ver más</a>
          </div>
        </div>
        <div class="col-md m-0 p-0">
          <div class="portada-img" style="background-image: url(img/brisas-de-pedrozo.jpg);" ></div>
        </div>
      </div>
    </div>
    <!--Portada 2-->
    <div class="carousel-item">
      <div class="row">
        <div class="col-md bg-azul text-white m-0 p-0">
          <div class="caption carousel-caption-caption">
            <h2 data-animation="animated bounceInLeft">LOTES EN PIRIBEBUY</h2>
            <h3 data-animation="animated bounceInLeft">Eucaplitos de Piribebuy</h3>
            <p class="mt-4 p-box" data-animation="animated bounceInLeft">Una ciudad histórica y turística. Ubicada a 73 kms al este de Asunción. El lugar de descanso ideal para vos y tu familia.</p>

            <a href="#" class="boton-verde mt-4" data-animation="animated bounceInLeft">Ver más</a>
          </div>
        </div>
        <div class="col-md m-0 p-0">
          <div class="portada-img" style="background-image: url(img/eucaliptos-de-piribebuy.png);" ></div>
        </div>
      </div>
    </div>
    <!--Portada 3-->
    <div class="carousel-item">
      <div class="row">
        <div class="col-md bg-azul text-white m-0 p-0">
          <div class="caption carousel-caption-caption">
            <h2 data-animation="animated bounceInLeft">TU LOTE MÁS CERCA</h2>
            <h3 data-animation="animated bounceInLeft">Parque Urbano de Altos</h3>
            <p class="mt-4 p-box" data-animation="animated bounceInLeft">Ubicado a 1.500 metros del Casco Urbano de la ciudad de Altos. Sobre Ruta Asfaltada a Loma Grande. Lotes con empedrado y luz eléctrica.</p>

            <a href="#" class="boton-verde mt-4" data-animation="animated bounceInLeft">Ver más</a>
          </div>  
        </div>
        <div class="col-md m-0 p-0">
          <div class="portada-img" style="background-image: url(img/parque-urbano-de-altos.jpg);" ></div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="portada-control">
    <div class="row">
         <!--Bullets-->
      <div class="col">
        <button type="button" class="bullet mt-4 active" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" class="bullet mt-4"  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" class="bullet mt-4"  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!--Controls-->
      <div class="col">
        <button class="arrow-portada rounded-4" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon mt-1" aria-hidden="true"></span>
        </button>
        <button class="arrow-portada rounded-4" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon mt-1" aria-hidden="true"></span>
        </button>
      </div>
    </div>   
  </div>
  
</div>

 <!--Buscador-->
 <div class="container cont-buscador">
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

<!--Últimos lanzamientos-->
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <h2 class="text-azul mb-4">Últimos lanzamientos</h2>
    </div>
    <div class="col text-end">
      <button class="control-productos bg-transparent border-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span><img src="img/arrow-left.svg"></span>
      </button>
      <button class="control-productos bg-transparent border-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span><img src="img/arrow-right.svg"></span>
      </button>
    </div>
  </div>

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
                  <h5 class="text-secondary mb-0 price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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

<!--Proximos Desarrollos-->
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <button class="control-productos bg-transparent border-0" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
        <span><img src="img/arrow-left.svg"></span>
      </button>
      <button class="control-productos bg-transparent border-0" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
        <span><img src="img/arrow-right.svg"></span>
      </button>
    </div>
    <div class="col text-end">
      <h2 class="text-azul mb-4">Próximos Desarrollos</h2>
    </div>
  </div>

  <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel-2">
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
                  <h5 class="mb-1 text-secondary price">Desde: <br> <span class="precio small">$2.000</span></h5>
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
<!--espaciador-->
<div class="w-100 py-5"></div>
<!--Quienes sommos-->

<div class="w-100 bg-verde">
  <div class="container">
    <div class="row">
      <div class="col-md">
        <div class="portada-img" style="background-image: url(img/nosotros.jpg);" ></div>
      </div>
      <div class="col-md p-5">
        <h2 class="mt-3">Quienes somos</h2>
        <p class="mt-4">Somos una empresa con más de 60 años de trayectoria que tiene la misión de consolidarse como una empresa lider en el mercado inmobiliario. </p>
        <p>Asumimos el compromiso de dar una atención de absoluta calidad a cada cliente para que el mismo nos tenga como referente en el mercado de loteamientos, ventas y alquileres.  </p>
        <a href="{{route('about')}}" class="boton-azul mt-4">Ver más</a>
      </div>
    </div>
  </div>
</div>

<!--espaciador-->
<div class="w-100 py-5"></div>

<!--Lotes por distrito-->

<div class="container">

      <h2 class="text-azul mb-4">Lotes por distrito</h2>

  <div class="row">
    <div class="col-md-4 col-12 col-sm mb-4">
      <div class="lote overflow-hidden" style="background-image: url(img/lote-1.jpg);">
        <div class="cover">
          <div class="lotes-caption">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones"><span class="w-100">12</span></div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles"><span class="w-100">6</span></div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>          
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12 col-sm mb-4">
      <div class="lote-sub overflow-hidden" style="background-image: url(img/lote-2.jpg);">
        <div class="cover">
          <div class="lotes-caption-sub">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones"><span class="w-100">12</span></div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles"><span class="w-100">6</span></div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>              
          </div>
        </div>
      </div>
      <div class="lote-sub overflow-hidden" style="background-image: url(img/lote-3.jpg);">
        <div class="cover">
          <div class="lotes-caption-sub">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones"><span class="w-100">12</span></div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles"><span class="w-100">6</span></div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>             
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-12 col-sm">
      <div class="lote overflow-hidden" style="background-image: url(img/lote-4.jpg);">
        <div class="cover">
          <div class="lotes-caption">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones"><span class="w-100">12</span></div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles"><span class="w-100">6</span></div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--espaciador-->
<div class="w-100 py-5"></div>
<!--Sucursales-->
<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="text-azul mb-4">Sucursales</h2>
    </div>
    <div class="col text-end">
      <select class="form-select select-buscar mb-4 bg-celeste border-0 rounded-4 text-azul">
        <option selected>Zona</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      <button class="btn bg-azul rounded-4 buscar"><img src="img/buscar.svg"></button>
    </div>
  </div>

  <div class="w-100 overflow-hidden rounded-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.607749766807!2d-57.632466485239924!3d-25.283777333324444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945da7ee66ba8e99%3A0xd5f173ef45df9d60!2sAbas%20Inmobiliaria!5e0!3m2!1ses!2spy!4v1667479426871!5m2!1ses!2spy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
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