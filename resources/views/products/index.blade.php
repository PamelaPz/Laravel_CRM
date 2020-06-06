@include('header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-4">
        <h4>Listado de productos</h4>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Tipo de Producto</th>
            {{-- <th scope="col">Handle</th> --}}
          </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>$ {{ $product->price }}</td>
                @foreach ($types as $type)
                    @if ($product->type_products_id == $type->id)
                      <td>{{ $type->type }}</td>
                    @endif
                @endforeach                
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