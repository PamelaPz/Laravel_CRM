@extends('body')
{{-- @include('header') --}}
  @section('customers')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-4">
        <h4>Listado de clientes registrados</h4>
    </div>

    <table class="table table-hover mb-5">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col"></th>
          {{-- <th scope="col">Handle</th> --}}
        </tr>
      </thead>
      <tbody>
          @forelse ($users as $user)
          <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->lastname }}</td>
              <td><a class="nav-link" href="{{ route('customer.info', $user->id) }}">Ver detalles</a></td>
          </tr>
          @empty
          <tr>
            <td>0</td>
            <td colspan="4">
              No hay usuarios registrados
            </td>
          </tr>
          @endforelse
      </tbody>
    </table>
  @endsection

@include('footer')