@include('header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1"> <b>{{ $title }}</b> </h1>
    </div>

    <div class="pt-4 pb-4">
        <div class="row">
          <div class="col-3"><h4>Listado de productos</h4></div>
          <div class="col-3">
            <a class="nav-link" href="{{ route('products.create') }}">
              <i class="fas fa-plus fa-lg"></i> 
              Crear nuevo producto
            </a>
          </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo de Producto</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
            <th scope="col">Descripción</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                @foreach ($types as $type)
                    @if ($product->type_products_id == $type->id)
                      <td>{{ $type->type }}</td>
                    @endif
                @endforeach                
                <td>{{ $product->name }}</td>
                <td>$ {{ $product->price }}</td>
                <td></td>
                <td>{{ $product->description }}</td>
                <td> 
                  <a class="nav-link" href="{{ route('products.editar', $product->id) }}">
                    <i class="fas fa-sync-alt"></i>
                  </a>
                </td>
                <td>
                  <a class="nav-link" href="{{ route('products.delete', $product->id) }}"><i class="fas fa-trash"></i></a>
                </td>
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