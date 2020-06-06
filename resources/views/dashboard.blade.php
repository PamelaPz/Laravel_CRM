@include('header')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1"> <b>Dashboard</b> </h1>
  </div>

  <div>
    <h2 class="pt-4">Acciones de CRUD</h2>
    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora natus nam ex magni temporibus explicabo, adipisci incidunt quia quaerat facere repudiandae consequatur voluptates rerum commodi nobis mollitia optio animi!</p> --}}

    <div class="pt-4 pb-3">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('create') }}">Crear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Leer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Borrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Actualizar</a>
        </li>
      </ul>
    </div>
  </div>

  @yield('crear')

@include('footer')