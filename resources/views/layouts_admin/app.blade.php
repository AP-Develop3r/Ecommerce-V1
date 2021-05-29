<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>

</head>
<body>
    <div id="viewport">
        <!-- Sidebar -->
        <div id="sidebar">
          <header>
            <a class="text-right mr-3 my-0 p-0 text-danger"  title="Cerrar Sesion"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-in-alt"></i> 
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
            </form>
              <img src={{ asset('images/admin.png') }}  style="height: 140px; width: 150px;display: block;" class="mx-auto d-block" alt="">
               <h6 class="text-white py-2">  Hola, <samp>{{ Auth::user()->name }} <i class="fas fa-tools"></i></samp> </h6>
          </header>
          
              <div class="">
                <a  id="menu" class="list-group-item text-white bg-blue text-left dropdown-toggle"  href="#" data-mdb-toggle="dropdown" aria-expanded="false">
                    Dashboard
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="menu">
                    <li>
                         <a class="text-white bg-blue dropdown-item"  href="{{ route('admin.products.index') }}"  >
                        Productos
                    </a>
                    </li>
                   <li>
                        <a class=" text-white bg-blue dropdown-item"  href="#list-home" >
                        Ordenes
                    </a>
                   </li>
                   <li>
                        <a class=" text-white bg-blue dropdown-item"  href="{{ route('admin.users.index') }}" >
                        Usuarios
                    </a>
                   </li>
                </ul>
              </div>

            </div>

            <nav class="navbar navbar-light bg-blue">
                <div class="container-fluid">
                <a class="navbar-brand text-white" href="{{ route('admin.index') }}">Dashboard</a>
                </div>
            </nav>
           
              <!-- Conte-->
              <main class="container mt-3">
                @yield('content')
              </main>
        </div> 
          
               

        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- MDB -->
        <script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script type="text/javascript" src="js\app.js"></script>
</body>
</html>
