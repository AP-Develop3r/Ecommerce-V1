@extends('layouts_admin.app')
@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" > Dashboard</a></li>
              <li class="breadcrumb-item text-decoration-none"><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
              <li class="breadcrumb-item text-decoration-none"><a href="#">Editar</a></li>
            </ol>
          </nav>
        </div>
      </nav>
</div>
<div class="container-fluid mt-lg-4 mx-lg-5">
    <h3 class="text-dark">Actualizar Usuario</h3>
</div>
<div class="row mt-lg-5 mx-lg-5">
  <form action="{{route('admin.users.update', $user->id)}}" method="POST">
      @csrf
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" name="name" class="form-control" value="{{ $user->name }}"/>
          <label class="form-label" for="form3Example1">Nombre</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" name="type" class="form-control" value="{{ $user->type }}"/>
          <label class="form-label" for="form3Example2">Cargo</label>
        </div>
      </div>
    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" name="email" class="form-control" value="{{ $user->email }}" />
      <label class="form-label" for="form3Example3" >Correo Electronico</label>
    </div>
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">GUARDAR CAMBIOS</button>
  
    <!-- Register buttons -->
  </form>
</div>




@endsection
