@include('header')
<a href="{{ url()->previous() }}">Regresar</a>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-3">
        <h4>Dirección del pedido</h4>
    </div>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#ID</th>
            <th colspan="2">Usuario</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Dirección</th>
            <th scope="col">Folio Carrito</th>
            <th scope="col">Fecha de registro</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $buys->id }}</th>
                @foreach ($users as $user)
                    @if ($user->id == $buys->user_id)
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->lastname }}</td>
                    @endif
                @endforeach 
                <td>{{ $buys->city }}</td>
                <td>{{ $buys->address }}</td>
                <td>{{ $buys->car_id }}</td>
                <td>{{ $buys->date_buy }}</td>
            </tr>
        </tbody>
    </table>

    <div class="pt-5 pb-3">
        <h4>Productos del pedido</h4>
    </div>

    <div class="row">
        @foreach ($cars as $car)
            @if ($car->id == $buys->car_id)                        
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($products as $product)
                                @if ($product->id == $car->product_id)
                                <h5 class="card-title">{{ $product->name }}</h5>
                                @endif
                            @endforeach 
                            <p class="card-text">Cantidad: {{ $car->quantity }}</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach 
      </div>

@include('footer')