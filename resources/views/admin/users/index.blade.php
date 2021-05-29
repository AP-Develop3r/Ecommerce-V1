@extends('layouts_admin.app')
@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" > Dashboard</a></li>
              <li class="breadcrumb-item text-decoration-none"><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
            </ol>
          </nav>
        </div>
      </nav>
</div>



<div class="container-fluid mt-lg-4 mx-lg-5">
    <h3 class="text-dark">Usuarios</h3>
</div>
<div class="row mt-lg-5 mx-lg-5">
    <div class="table-responsive">
        <table class="table">
                <thead>
                  <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr class="text-center">
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td>
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('admin.users.edit', $user->id) }}"><i class="fas fa-user-edit mx-lg-1 text-primary" title="Editar Usuario"></i></a>
                            </div>
                            <div class="col">
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link m-0 p-0"><i class="fas fa-trash-alt mx-lg-1 text-danger" title="Borrar Usuario" ></i></button>
                                </form>
                            </div>
                        </div>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
        </table>
      </div>
</div>




@endsection
