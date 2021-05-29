@extends('layouts_admin.app')
@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" > Dashboard</a></li>
              <li class="breadcrumb-item text-decoration-none"><a href="{{ route('admin.products.index') }}">Productos</a></li>
            </ol>
          </nav>
        </div>
      </nav>
</div>
<div class="row my-0 py-0">
  <div class="container-fluid mt-lg-4 mx-lg-5">
    <div class="col-lg-6 my-0 py-0">
      <h3 class="text-dark">Productos</h3>
    </div>
    <div class="col-lg-6 float-right my-0 py-0">
      <a href="{{ route('admin.products.create') }}" class=" btn btn-light float-right mr-5"><i class="fas fa-plus fa-lg mx-2 text-success"></i>Nuevo producto</a>
    </div>
  </div>
</div>

<div class="row mt-lg-5 mx-lg-5">
    <div class="table-responsive">
        <table class="table">
                <thead>
                  <tr class="text-center">
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descrpcion</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach( $article as $products)
                  <tr class="text-center">
                    <th><img src="/img/products/{{$products->file}}" width="50px"; height="50px";></th>
                    <td>{{ $products->name }}</td>
                    <td>{{ $products->details }}</td>
                    <td>{{ $products->price}}</td>
                    <td>{{ $products->description }}</td>
                    <td>
                        <div class="m-0 row justify-content-center">
                            <div class="col-6">
                                <a href="{{ route('admin.products.edit', $products->id) }}"><i class="fas fa-user-edit mx-lg-1 text-primary" title="Editar Usuario"></i></a>
                            </div>
                            <div class="col-6">
                                <form action="{{route('admin.products.destroy',  $products)}}" method="POST">
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
        <div class="m-0 row justify-content-center">
          <div class="col-auto text-center p-5">
            {{   $article->links() }}
          </div>
       </div>
      </div>
      
</div>




@endsection
