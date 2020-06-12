@extends('products.options')

@section('crear')
<a class="nav-link" href="{{ url()->previous() }}">Regresar</a>
<div class="pb-5">
	<h2 class="pt-4 pb-4 px-4">Nuevo Producto</h2>

	<div class="px-4 col-12">
		<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="name">Nombre del producto</label>
						<input type="text" name="name" id="name" class="form-control" placeholder="Nombre producto">
						{{-- <small id="emailHelp" class="form-text text-muted">Si su producto es: Pizza, HotDog, Tacos o Pozole solo escriba el calificativo o ingredientes.</small> --}}
					</div>
					<div class="form-group">
						<label for="price">Precio</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">$</span>
							</div>
							<input type="number" name="price" id="price" class="form-control" placeholder="50" aria-describedby="basic-addon1" min="0">
						</div>
					</div>
					<div class="form-group">
						<label for="description">Descripción del producto</label>
						<input type="text" name="description" id="description" class="form-control" placeholder="Descripción">
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
				</div>
				<div class="col">
					<div class="form-group">
						<label for="product_image">Image del producto</label>
						<input type="file" name="product_image" class="form-control-file" id="product_image">
					</div>
				</div>
			</div>
			<div class="col-3 pt-4">
				<button type="submit" class="btn btn-primary btn-lg btn-block">Crear</button>
			</div>
		</form>
	</div>
</div>
@endsection
