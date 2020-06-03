@include('header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-4">
        <h4>Listado de pedidos</h4>
    </div>
    <table class="table table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            {{-- <th scope="col">Número de Pedidos</th> --}}
            <th colspan="2">Usuario</th>
            <th scope="col">Fecha del pedido</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($buys as $buy)
            <tr>
                <th scope="row">{{ $buy->id }}</th>
                @foreach ($users as $user)
                    @if ($user->id == $buy->user_id)
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->lastname }}</td>
                    @endif
                @endforeach 
                <td>{{ $buy->date_buy }}</td>
                <td><a href="{{ url('/pedidos/'.$buy->id) }}">Ver detalles</a></td>            
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