@extends('layouts_client.app')

@section('content')
    <div class="container bg-light " style="margin-top: 80px">
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4 class="text-brown">Productos en nuestra tienda</h4>
                    </div>
                </div>
                <hr>
                <div class="row bg-light ">
                    @foreach($products as $pro)
                        <div class="col-lg-3  mt-3  ">
                            <div class="card p-3  " style="margin-bottom: 20px; height: auto;">
                                <div class="zoom pt-2 m-auto">
                                    <img src="/img/products/{{ $pro->file }}"  class="card-img-top mx-auto rounded-circle  d-block"  style="height: 150px; width: 170px;display: block;"  alt="{{ $pro->file }}" >

                                </div>
                                <div class="card-body bg-white p-0">
                                    <a href=""><h6 class="card-title text-brown text-center text-decoration-none">{{ $pro->name }}</h6></a>
                                    <p class="text-center">S/{{ $pro->price }}</p>
                                    <p class="text-center">{{ $pro->description }}</p>
                                    <form action="{{ route('client.cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="number" name="quantity" value="1" class=" d-none">
                                        <div class="row bg-light">
                                            <button  type="submit"  class=" btn-brown  btn-rounded text-white" class="tooltip-test" title="add to cart">
                                                  <i class="fa fa-shopping-cart text-white"></i> 
                                                  Añadir al carrito
                                             </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="card mb-3">
                        {{-- <img
                          src=""
                          class="card-img-top"
                          alt="..."
                        /> --}}
                        <div class="card-body ">
                          <h5 class="card-title text-center">ACEPTAMOS LOS MEDIOS DE PAGO</h5>
                          <p class="card-text text-center">
                            Efectivo, depósito bancario, Yape y Plin.
                          </p>
                          <p class="card-text text-center">
                            <small class="text-muted ">Pagos contraentrega en Lima metropolitana.</small>
                          </p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection

