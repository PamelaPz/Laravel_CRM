@include('header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-4">
        <h4>Listado de pedidos</h4>
    </div>
    <table class="table mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">Número de Pedidos</th> --}}
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Tipo de empleado</th>
            <th scope="col">Fecha de integración</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($employes as $employe)
            <tr>
                <th scope="row">{{ $employe->id }}</th>
                <td>{{ $employe->name }}</td>
                <td>{{ $employe->lastname }}</td> 
                <td>{{ $employe->email }}</td>
                @if ($employe->is_admin == 1)
                    <td>Administrador</td>
                @else
                    <td>General</td>
                @endif
                <td>{{ $employe->created_at }}</td>
                {{-- <td><a href="{{ url('employe/'.$employe->id) }}">Ver detalles</a></td>             --}}
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

@include('footer')