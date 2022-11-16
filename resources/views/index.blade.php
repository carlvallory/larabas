<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Abas Inmobiliaria</title>
  <link href="css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!--Font Awesome-->
  <script src="https://kit.fontawesome.com/192ee6ec02.js" crossorigin="anonymous"></script>

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;800&family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">

  <!--Css Abas-->
  <link href="css/abas.css" rel="stylesheet">

</head>

<body style="overflow-x: hidden;">

 <!--Cabecera-->
 <div class="container">
  <nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" height="60px"></a>
      <button class="navbar-toggler menu-res" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span><img src="img/burger.svg"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <!--ul vacío-->
        </ul>
        <!--menu-->
        <span class="navbar-text">
          <ul class="navbar-nav nav-res me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Loteamientos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ofrecenos tu propiedad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link boton-verde btn-res" href="#">Contacto</a>
            </li>
          </ul>
        </span>
      </div>
    </div>
  </nav>
 </div>
 

<!--Portada-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

  <div class="carousel-inner">
    <!--Portada 1-->
    <div class="carousel-item active">
      <div class="row">
        <div class="col-md bg-azul text-white m-0 p-0">
          <div class="caption carousel-caption">
            <h2>Proyectos vigentes</h2>
          <p class="mt-4">Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.</p>

            <a href="#" class="boton-verde mt-4">Ver más</a>
          </div>
        </div>
        <div class="col-md m-0 p-0">
          <div class="portada-img" style="background-image: url(img/portada.jpg);" ></div>
        </div>
      </div>
    </div>
    <!--Portada 2-->
    <div class="carousel-item">
      <div class="row">
        <div class="col-md bg-azul text-white m-0 p-0">
          <div class="caption carousel-caption">
            <h2>Proyectos vigentes</h2>
          <p class="mt-4">Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.</p>

            <a href="#" class="boton-verde mt-4">Ver más</a>
          </div>
        </div>
        <div class="col-md m-0 p-0">
          <div class="portada-img" style="background-image: url(img/portada.jpg);" ></div>
        </div>
      </div>
    </div>
    <!--Portada 3-->
    <div class="carousel-item">
      <div class="row">
        <div class="col-md bg-azul text-white m-0 p-0">
          <div class="caption carousel-caption">
            <h2>Proyectos vigentes</h2>
          <p class="mt-4">Lorem Ipsum is simply dummy text of the
            printing and typesetting industry.</p>

            <a href="#" class="boton-verde mt-4">Ver más</a>
          </div>  
        </div>
        <div class="col-md m-0 p-0">
          <div class="portada-img" style="background-image: url(img/portada.jpg);" ></div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="portada-control">
    <div class="row">
         <!--Bullets-->
      <div class="col">
        <button type="button" class="bullet mt-4 activo" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
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
        <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
        <a href="#" class="boton-azul mt-4">Ver más</a>
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
    <div class="col-md-4 col-6 ">
      <div class="lote overflow-hidden" style="background-image: url(img/lote-1.jpg);">
        <div class="cover">
          <div class="lotes-caption">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones">12</div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles">6</div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>          
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 ">
      <div class="lote-sub overflow-hidden" style="background-image: url(img/lote-2.jpg);">
        <div class="cover">
          <div class="lotes-caption-sub">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones">12</div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles">6</div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>              
          </div>
        </div>
      </div>
      <div class="lote-sub overflow-hidden" style="background-image: url(img/lote-3.jpg);">
        <div class="cover">
          <div class="lotes-caption-sub">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones">12</div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles">6</div> <small class="text-white fs-12">Lotes disponibles</small>
            </div>             
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-6 ">
      <div class="lote overflow-hidden" style="background-image: url(img/lote-4.jpg);">
        <div class="cover">
          <div class="lotes-caption">
            <h3 class="text-white mb-3">Itapúa</h3> 
            <div class="item-lote">
              <div class="fracciones">12</div> <small class="text-white fs-12 me-3">Fracciones</small>
            </div>
            <div class="item-lote">
              <div class="lotes-disponibles">6</div> <small class="text-white fs-12">Lotes disponibles</small>
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
</body>

</html>