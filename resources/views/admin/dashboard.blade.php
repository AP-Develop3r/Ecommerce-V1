@extends('layouts_admin.app')
@section('content')
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" > Dashboard</a></li>
            </ol>
          </nav>
        </div>
      </nav>
</div>

<div class="row mt-lg-5">
    <div class="col-sm-4">
        <div class="card">
            <a href="{{ route('admin.products.index') }}" class="text-center">
                <i class="fas fa-boxes fa-5x text-brown text-center m-3"></i>
            </a> 
                <div class="card-body text-center">
                    <a href="{{ route('admin.products.index') }}">
                        <h5 class="card-title text-dark">Productos</h5>
                    </a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <i class="fas fa-clipboard-list fa-5x text-brown text-center m-3"></i>
            <div class="card-body text-center">
            <h5 class="card-title">Odenes</h5>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <a href="{{ route('admin.users.index') }}" class="text-center">
                <i class="fas fa-users fa-5x text-brown  m-3"></i>
            </a> 
                <div class="card-body text-center">
                    <a href="{{ route('admin.users.index') }}">
                        <h5 class="card-title text-dark">Usuarios</h5>
                    </a>
            </div>
        </div>
    </div>
</div>
@endsection
