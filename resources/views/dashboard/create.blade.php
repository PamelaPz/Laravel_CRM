@extends('dashboard.dashboard')

    @section('crear')
        <div class="pb-5">
            <h2 class="pt-4 pb-4 px-4">Nuevo Producto</h2>

            <div class="px-4 col-6">
                <form action="{{ route('products.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Nombre del producto</label>
                        <input type="text" name="name" id="name" class="form-control" aria-describedby="emailHelp" placeholder="Nombre producto">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">$</span>
                            </div>
                            <input type="number" name="price" id="price" class="form-control" placeholder="50" aria-label="Username" aria-describedby="basic-addon1" min="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type_products_id">Tipo de Producto</label>
                        <div class="input-group mb-3">
                            <br>
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="type_products_id">Opciones</label>
                            </div>
                            <select name="type_products_id" class="custom-select" id="type_products_id">
                                <option selected>Elegir...</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6 m-auto pt-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
