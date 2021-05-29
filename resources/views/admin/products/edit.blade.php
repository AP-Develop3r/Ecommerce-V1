@extends('layouts_admin.app')
@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" > Dashboard</a></li>
              <li class="breadcrumb-item text-decoration-none"><a href="{{ route('admin.products.index') }}">Productos</a></li>
              <li class="breadcrumb-item text-decoration-none"><a href="{{ route('admin.products.create') }}">Actualizar producto</a></li>
            </ol>
          </nav>
        </div>
      </nav>
</div>

<div class="container-fluid mt-lg-4 mx-lg-5">
  <h3 class="text-dark">Actualizar Producto</h3>
</div>
<div class="row mt-lg-5 mx-lg-5">
<form action="{{ route('admin.products.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="name" class="form-control" value="{{$article->name }}"/>
        <label class="form-label" for="form3Example1">Nombre</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <button class="btn btn-success">Imagen</button>
        <input class="" type="file" name="file" class="form-control" accept="image/*" value="{{$article->image_path }}"/>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="details" class="form-control" value="{{$article->details }}"/>
        <label class="form-label" for="form3Example1">Detalles</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="price" class="form-control" value="{{$article->price }}"/>
        <label class="form-label" for="form3Example1">Precio</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="description" class="form-control" value="{{$article->description }}" />
    <label class="form-label" for="form3Example3" >Descripcion</label>
  </div>
  <!-- Submit button -->
  <button type="submit" class="btn btn-success btn-block mb-4">GUARDAR CAMBIOS</button>
</form>
</div>

@endsection
