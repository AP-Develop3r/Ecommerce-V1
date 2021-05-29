<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    // Mostrar Usuarios
    public function admin_users_index(){ 
        $users = User::all();
        return view('admin.users.index')->with(['users' => $users]);
    }
    // Editar Usuario Seleccionado
    public function admin_users_edit($id){
       $user = User::findOrFail($id);
       return view('admin.users.edit', compact('user'));
        
    }
    // Actualizar Usuario Seleccionado
    public function admin_users_update(Request $request ,$id){
         $user = User::findOrFail($id);
         $user->name = $request->input('name');
         $user->type = $request->input('type');
         $user->email= $request->input('email');
         $user->save();
         return redirect()->route('admin.users.index')->with('success_msg', 'Usuario Actualizado Exitosamente!');
         
     }
     // Eliminar Usuario Seleccionado
        public function admin_users_destroy($id){
         $user = User::findOrFail($id);
         $user->delete();
         return redirect()->route('admin.users.index')->with('success_msg', 'Usuario Eliminado Exitosamente!');
         
     }
    
}
