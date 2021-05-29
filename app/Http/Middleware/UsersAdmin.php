<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   

     public function handle(Request $request, Closure $next) {
            if(Auth::check() && Auth::user()->type =='2'){
                 return $next($request); // si es un client redirige a la ruta client.home
              }
              else {
               return redirect('/');
           }
     }
}
