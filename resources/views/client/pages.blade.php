@extends('layouts_client.app')

@section('content')

@section('content')
    <div class="container" style="margin-top: 60px">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-3 mb-2">
            <div class="container-fluid">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item text-decoration-none"><a href="/">Tienda</a></li>
                  <li class="breadcrumb-item text-decoration-none"><a href="{{ route('pages') }}">Metodos de pagos</a></li>
                </ol>
              </nav>
            </div>
          </nav>
            


        <div class="row ">
            <div class="col-lg-6">
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img
                        src={{ asset('images/nosotros.png') }}
                          alt="..."
                          class="img-fluid mt-5"
                        />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Acerca de Nosotros</h5>
                          <p class="note note-ligh text-justify">
                            Contamos con un equipo de venta que podrá asesorar tu compra
                             y para mayor comodidad te ofrecemos el servicio de Delivery 
                             a toda la provincia de Lima y el Callao.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img
                        src={{ asset('images/objetivo.png') }}
                          alt="..."
                          class="img-fluid mt-5"
                        />
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Objetivo</h5>
                         
                          <p class="note note-ligh text-justify">
                            Garantizar a nuestros clientes productos de calidad antes, durante y después de la compra,
                            apostamos a ser líder en el mercado en los próximos años diferenciándonos en la calidad, puntualidad y cordialidad.
                          </p>
                          
                        </div>
                      </div>
                    </div>
                  </div>


            </div>
            <div class="col-lg-6">
                <figure class="row figure mt-3">
                    <img
                    src={{ asset('images/teque29.jpg') }}
                      class="figure-img img-fluid rounded shadow-3  "
                      alt="..."
                    />
                    <figcaption class="figure-caption text-end">Los tequeños son tan ricos y versátiles para cualquier ocasión</figcaption>
                  </figure>
            </div>
        </div>
    </div>
@endsection

