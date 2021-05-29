@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg rounded">
                <nav class=" navbar-expand-sm row m-0 p-0">
                    <div class="container-fluid p-0">
                      <div class=" navbar-collapse justify-content-center m-0 p-0">
                        <div  class="col-lg-6 p-0 bg-white">
                            <div class="form-group m-0 text-center">
                            <label class="nav-link text-brown w-100 m-0 "  >Registro</label>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0  " >
                          <div class="form-group m-0 text-center ">
                            <a class="btn-brown  text-white  w-100 text-decoration-none " href="{{ route('login') }}">Iniciar sesión</a>
                          </div>
                        </div >
                      </div>
                    </div>
                  </nav>
                  <div class="text-center mt-3">
                    <i class="fas fa-user-plus fa-4x my-2 text-brown " ></i><br>
                    <h3 class="text-brown">Registro</h3 >
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="input-group mb-3 px-5 ">
                                <span class="input-group-text border-0"><i class="fas fa-user text-brown "></i></span>
                                <input id="name" placeholder="Nombre" type="text"  class="form-control-2  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3 px-5 ">
                                <span class="input-group-text border-0"><i class="fas fa-envelope text-brown "></i></span>
                                <input id="email" placeholder="Correo electrónico" type="email"  class="form-control-2  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3 px-5 ">
                                <span class="input-group-text border-0" ><i class="fas fa-lock text-brown "></i></span>
                                <input id="password" placeholder="Contraseña" type="password"  class="form-control-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="input-group mb-3 px-5 ">
                                <span class="input-group-text border-0" ><i class="fas fa-lock text-brown "></i></span>
                                <input id="password-confirm" placeholder="Confirmar contraseña" type="password"  class="form-control-2" name="password_confirmation" required autocomplete="new-password">
                              
                            </div>
                        </div>


                        <div class="form-group row ">
                            <div class="col text-center">
                                <button type="submit" class="shadow btn-brown  text-white  w-100">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
