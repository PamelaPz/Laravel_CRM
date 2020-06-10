@extends('body')

  @section('home')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1><b>Acciones de CRUD</b></h1>
    </div>

    <div>
      <div class="pt-4 pb-3">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link {{ active('create') }}" href="{{ route('create') }}">Crear Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ active('read') }}" href="{{ route('read') }}">Leer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ active('update') }}" href="{{ route('update') }}">Actualizar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ active('delete') }}" href="{{ route('delete') }}">Eliminar</a>
          </li>
        </ul>
      </div>
    </div>

    @yield('crear')
    @yield('leer')
    @yield('update')
    @yield('delete')
    
  @endsection
