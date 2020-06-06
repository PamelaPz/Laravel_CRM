<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear producto</title>
</head>
<body>
<form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="nombre" id="name" value="{{ $product->name }}">
    <input type="text" name="price" placeholder="precio" id="price" value="{{ $product->price  }}">
    <select name="type_products_id" id="type_products_id">
        <option value="{{ $product->type_products->id }}" selected>{{ $product->type_products->type }}</option>
        @foreach($types as $type)
            @if($type->id != $product->type_products->id)
                <option value="{{ $type->id }}">{{ $type->type }}</option>
            @endif
        @endforeach
    </select>
    <select name="status_product_id" id="status_product_id">
        <option value="{{ $product->status_product->id }}">{{ $product->status_product->status }}</option>
        @foreach($statuses as $status)
            @if($status->id != $product->status_product->id)
                <option value="{{ $status->id }}">{{ $status->status }}</option>
            @endif
        @endforeach
    </select>
    <button type="submit">Enviar o Actualizar</button>
</form>
</body>
</html>
