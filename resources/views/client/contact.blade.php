@extends('layouts_client.app')

@section('content')

@section('content')
    <div class="container" style="margin-top: 60px">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-3 mb-2">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item text-decoration-none"><a href="/">Tienda</a></li>
                  <li class="breadcrumb-item text-decoration-none"><a href="{{ route('contact') }}">Contacto</a></li>
                </ol>
              </nav>
            </div>
          </nav>


          <div class="row">
            <div class="col-md-8">
              <figure class="row figure mt-3">
                <img
                src={{ asset('images/lasa.jpg') }}
                  class="figure-img img-fluid rounded shadow-3  "
                  alt="..."
                />
                <figcaption class="figure-caption text-left">La lasaña (italiano: lasagna) es un tipo de pasta que se sirve en láminas</figcaption>
              </figure>

              
            </div>
            <div class="col-md-4">
              
                <div class="row">
                  <div class="card h-100">
                    <i class="fas fa-mobile-alt fa-5x text-brown text-center m-3"></i>
                    <div class="card-body text-center">
                      <h5 class="card-title">Teléfonos</h5>
                      <p class="card-text">
                        939-884487
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card h-100">
                    <i class="fas fa-envelope fa-5x text-brown text-center m-3"></i>
                    <div class="card-body text-center">
                      <h5 class="card-title ">Correo Electrónico</h5>
                      <p class="card-text">
                        administracion@boca2s.com
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="card h-100">
                    <i class="fas fa-map-marker-alt fa-5x text-brown text-center m-3"></i>
                    <div class="card-body text-center">
                      <h5 class="card-title ">Ubacion</h5>
                      <p class="card-text">
                        Somos tienda online
                      </p>
                      <span>
                        Toda cosnsulta sera atendida de forma virtual
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          

         









           
@endsection

