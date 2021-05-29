@extends('layouts_client.app')

@section('content')
<div class="container" style="margin-top: 60px">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-3 mb-2">
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item text-decoration-none"><a href="/">Tienda</a></li>
          <li class="breadcrumb-item text-decoration-none"><a href="{{ route('client-cart-index') }}">Carrito de Compras</a></li>
          <li class="breadcrumb-item text-decoration-none"><a href="#">Orden</a></li>
        </ol>
      </nav>
    </div>
  </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row" >
            <div class="col-md-8 col-lg-8 ">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <br>
                        @if(\Cart::getTotalQuantity()>0)
                            <h4> Orden de compra</h4><br>
        
                        @else
                            <h4>No hay producto(s) en su carrito</h4><br>
                            <a href="/" class="btn btn-dark">Seguir comprando</a>
                        @endif
                        
                        <div class="row text-center text-brown">
                            <div class="col-4 ">
                                <b>PRODUCTOS</b>
                            </div>
                            <div class="col-4">
                                <b>PRECIO</b>
                            </div>
                            <div class="col-4">
                                <b>UNIDADES</b>
                            </div>
                        </div>
                        
                        <hr >
                        @foreach($cartCollection as $item)
                            <div class="row">
                                <div class="col-lg-4">
                                   <b class="ml-2"> {{ $item->name}}</b>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <p>
                                        
                                        <b>Precio: </b>S/{{ $item->price }}<br>
                                        <b>Sub-Total: </b>S/{{ \Cart::get($item->id)->getPriceSum() }}           
                                        {{--<b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row justify-content-center text-center">
                                        <form action="{{ route('cart.update') }}" method="POST">
                                            {{ csrf_field() }}
                                            
                                            <div class="col"><input type="hidden" value="{{ $item->id}}" id="id" name="id"></div> 
                                             <b class="text-center">{{ $item->quantity }}</b>
                                        </form>
                                    </div>
                                </div>
                            </div>        
                        <hr class="m-0 p-0">
                        @endforeach
                        @if(count($cartCollection)>0)
                        <div class="card mt-2">
                            <ul class="list-group list-group">
                                <form action="" method="POST">
                                <li class="list-group-item border-0"><b>Metodo de Pago:</b>
                                        <input class="mx-1" type="radio" name="transporte2" value="1" checked>Efectivo 
                                        <input class="mx-1" type="radio" name="transporte2" value="2" >Traferencia
                                        <input class="mx-1" type="radio" name="transporte2" value="3" id="yape" onclick="codigo()">Yape
                                        <input class="mx-1" type="radio" name="transporte2" value="3">Plin
                                </li>
                                <li class="list-group list-group-flush px-2">
                                    <div class="form-outline mb-4 mt-2  ">
                                        <textarea class="form-control" id="form6Example7" rows="1"></textarea>
                                        <label class="form-label text-dark" for="form6Example7">Descripcion (opcional)</label>
                                      </div>
                                     
                                </li>  
                                </form>
                            </ul>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-right"><b>Total: </b>S/{{ \Cart::getTotal() }}</li>
                            </ul>
                        </div>
                        <br>
                          
                    
                         @endif 
                        @if(count($cartCollection)>0)
        
                        <div class="row">
                            <div class="col">
                                <form action="{{ route('cart.clear') }}" method="POST">
                                {{ csrf_field() }}
                                <button class="btn text-white btn-md"  style=" background: #D50000;">Eliminar Orden</button>
                            </form>
                            </div>
                            <div class="col">
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn text-white btn-md float-right btn-success " >Finalizar orden</button>
                                </form>
                            </div>
                        </div>
                            
                            
                            
                        @endif
                    </div>
                 
                </div>
            </div>
            <div class=" col-md-4 col-lg-4 mt-5" style="display: none;" id="qr"> 
                    <div class="row justify-content-center" > 
                        <div class="col-12">
                            <img src={{ asset('images/yape.jpg') }} alt="..." class="mx-auto d-block"/>
                        </div>
                     </div>   
                
                <div class="row justify-content-center m-0 mt-2">
                    <div class="col-auto text-center p-0">
                        <button type="button" class="btn btn-outline-secondary btn-rounded" ndata-mdb-ripple-color="dark">
                        Info
                    </div>
                </div>
            </div>
                
            {{-- <div class=" col-sm- col-lg-3">
                <div id="" style="display: none">
                    <div class="card">
                        <img
                          src={{ asset('images/yape.jpg') }}
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the
                            card's content.
                          </p>
                          <button type="button" class="btn btn-outline-secondary btn-rounded" ndata-mdb-ripple-color="dark">
                            Info
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
        

        
        
        <br><br>
    </div>
   
@endsection
