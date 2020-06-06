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
<form action="{{ route('products.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="nombre" id="name">
    <input type="number" name="price" placeholder="precio" id="price">
    <select name="type_products_id" id="type_products_id">
        @foreach($types as $type)
            <option value="{{ $type->id }}">{{ $type->type }}</option>
        @endforeach
    </select>
    <select name="status_product_id" id="status_product_id">
        @foreach($statuses as $status)
            <option value="{{ $status->id }}">{{ $status->status }}</option>
        @endforeach
    </select>
    <button type="submit">Enviar o Guardar</button>
</form>
</body>
</html>
