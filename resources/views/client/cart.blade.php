@extends('layouts_client.app')

@section('content')
<div class="container p-0" style="margin-top: 70px">
    <nav >
        <ol class="breadcrumb bg-light ">
          <li class="breadcrumb-item">
              <a href="/" class="text-orange text-decoration-none">Tienda</a>
          </li>
          <li class="breadcrumb-item">
              <a href="{{ route('client-cart-index') }}" class="text-orange text-decoration-none">Carrito de Compras</a>
          </li>
        </ol>
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
            @foreach($errors>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif

        @if(count(Cart::getContent()))
            <div class="row m-0">
                <div class="col-9">
                    <div class="row bg-orange pt-2 rounded m-0">
                        <div class="col">
                            <h5 class="text-brown">Carrito de Compras</h5>
                        </div>
                        <div class="col text-right">
                            <h5 class="text-brown">({{count(\Cart::getContent())}}) Producto(s) <i class="fas fa-cart-plus"></i></h5>
                        </div>
                    </div>

                    
                    <div class="row  h-100 justify-content-center shadow bg-white m-0">
                        @foreach($cart as $item)
                            <div class="col-4 bg-white p-0">
                                <div class="row">
                                    <div class="col pt-4 ">
                                        <img src="/img/products/{{ $item->file }}" class=" " width="180" height="180"  alt="{{ $item->file }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 bg-white  ">
                                <div class="row float-right mt-2 ">
                                    <div class="col ">
                                         <form action="{{ route('cart.remove') }}" method="POST">
                                             {{ csrf_field() }}
                                              <input type="hidden" class="form-control form-control-sm" value="{{ $item->id }}" id="id" name="id">
                                              <button class=" text-danger border-0 bg-white" ><i class="fa fa-trash fa-1x"></i></button>
                                         </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container">
                                        <div class="pt-4 pl-4">
                                            <h4 class="text-brown">{{ $item->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="container">
                                        <div class="">
                                            <p><i class="fas fa-hand-holding-usd mr-3"></i> Precio: S/ {{ $item->price }}</p>
                                            <p><i class="fas fa-cookie-bite mr-3"></i> {{ $item->details}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"> 
                                        <div class="col">
                                            <p><i class="fas fa-box mr-3"></i>Cantidad: {{ $item->price }}                             
                                                    <i class="fas fa-plus mx-3 text-success"></i>
                                               
                                                    <i class="fas fa-minus text-danger"></i>   
                                            </p>
                                        </div>
                                </div>
                                <div class="row text-right">
                                    <div class="col">
                                         <p> Sub-Total: S/ {{ $item->price }}</p>
                                    </div>
                                </div>
                            
                            </div>
                            @endforeach
                    </div>
                   
                </div>
                
            </div>



        @else
            <h4>No hay producto(s) en su carrito</h4><br>
            <a href="/" class="btn btn-dark">Seguir comprando</a>
        @endif
</div>

















               

              
    {{--                    
                  
                    @if(count($cart)>0)
                        <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button class="btn text-white btn-md"  style=" background: #D50000;">Vaciar carrito</button>
                        </form>
                    @endif
                
                @if(count($cart)>0)
                    <div class="col-lg-5 mt-3 bg-light">
                        <div class="card mt-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-right"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                            </ul>
                        </div>
                        <br>
                        <div class="float-right " >
                            <a href="/" class="btn btn-dark">Seguir comprando</a>
                            <a href="{{ route('client.order') }}" class="btn btn-success">Pasar por la caja</a>
                        </div>  
                    </div>
                @endif
            </div>
            <br><br>
        </div> --}}
@endsection



{{-- @if(count(Cart::getContent()))
<h4>{{count(\Cart::getContent())}} Producto(s) en su carrito</h4><br>
@else
<h4>No hay producto(s) en su carrito</h4><br>
<a href="/" class="btn btn-dark">Seguir comprando</a>
@endif --}}