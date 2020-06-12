@extends('products.options')

    @section('editar')
        <a class="nav-link" href="{{ url()->previous() }}">Regresar</a>
        <div class="pb-5">
            <h1 class="pt-3 pb-4 px-4">Actualizar</h1>

            <div class="px-4 col">
                <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Nombre del producto</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                                {{-- <small id="emailHelp" class="form-text text-muted">Si su producto es: Pizza, HotDog, Tacos o Pozole solo escriba el calificativo o ingredientes.</small> --}}
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">$</span>
                                    </div>
                                    <input type="number" name="price" id="price" class="form-control" min="0" value="{{ $product->price  }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción del producto</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ $product->description  }}">
                            </div>
                            <div class="form-group">
                                <label for="type_products_id">Tipo de Producto</label>
                                <div class="input-group mb-3">
                                    <br>
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="type_products_id">Opciones</label>
                                    </div>
                                    <select name="type_products_id" class="custom-select" id="type_products_id">
                                        <option value="{{ $product->type_products->id }}" selected>{{ $product->type_products->type }}</option>
                                        @foreach($types as $type)
                                            @if($type->id != $product->type_products->id)
                                                <option value="{{ $type->id }}">{{ $type->type }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset( 'storage/'.$product->image ) }}" alt="img-food" class="img-thumbnail" style="width: 70%">
                            <div class="form-group">
                                <label for="product_image">Image del producto</label>
                                <input type="file" name="product_image" class="form-control-file" id="product_image" value="hola.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-3 pt-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
