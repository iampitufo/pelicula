<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{asset("assets/back/img/logo.png")}}" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1)==''?'active':'' }}" aria-current="page"
              href="{{ route('index') }}">Inicio<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1)=='catalog'?'active':'' }}"
              href="{{ route('catalog.index') }}">Catálogo
            </a>
          </li>
          @if (session("rol")== 'admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1)=='create'?'active':'' }}"
                href="{{ Route('catalog.create') }}">Crear Pelicula
                </a>
            </li>
          @endif

          @if (!session("nombre"))
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1)=='login'?'active':'' }}" href="{{ route('user.login') }}">Iniciar
              Sessión
            </a>
          </li>
          @endif

          @if (session("nombre"))
          <li class="nav-item">
            <a class="nav-link {{ Request::segment(1)=='logout'?'active':'' }}" data-bs-toggle="modal"
              data-bs-target="#modalSalir">Salir
            </a>
          </li>
          <!-- Modal -->
          <div class="modal fade" id="modalSalir" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <p>¿Esta seguro que desea salir?</p>
                  <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</a>
                  <a type="button" class="btn btn-primary" href="{{route('user.logout')}}">si</a>
                </div>
              </div>
            </div>
          </div>
          @endif

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="buscar" aria-label="search" />
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>

      </div>
    </div>
  </nav>
</header>


{{-- @if (session("nombre"))
<div class="toast-container text-white">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="{{asset("assets/back/img/user/user.png")}}" alt="user" width="32" height="32"
                class="d-inline-block align-text-top rounded-circle rounded me-2" />
            <strong class="me-auto text-white">Inicio de Sesión</strong>
            <small class="text-muted text-white">just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body text-white">
            Registrado como {{session("nombre")}}
        </div>
    </div>
</div>
@endif --}}
