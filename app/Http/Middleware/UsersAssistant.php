<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersAssistant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   

    public function handle(Request $request, Closure $next)
       {
           switch(auth::user()->type){
               case ('1'):
                   return redirect('admin');//si es administrador redirige al admin.home
               break;
               case('2'):
                    return redirect('client');// si es un cliente redirige a la ruta client.home   
               break;	
               case ('3'):
                    return $next($request);//si es administrador redirige al asistent
               break;
           }
       }
}
