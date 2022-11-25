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
                <a class="nav-link {{ (request()->is("/")) ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is(explode("/",route('about'))[3])) ? 'active' : '' }}" href="{{route('about')}}">Quienes somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is(explode("/",route('property.map'))[3])) ? 'active' : '' }}" href="{{route('property.map')}}">Loteamientos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is(explode("/",route('property.request'))[3])) ? 'active' : '' }}" href="{{route('property.request')}}">Ofrecenos tu propiedad</a>
              </li>
              <li class="nav-item">
                <a class="nav-link boton-verde btn-res {{ (request()->is(explode("/",route('contact'))[3])) ? 'active' : '' }}" href="{{route('contact')}}">Contacto</a>
              </li>
            </ul>
          </span>
        </div>
      </div>
    </nav>
</div>