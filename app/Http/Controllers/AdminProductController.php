<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
     // Mostrar Productos
     public function admin_products_index(){ 
        $article = Article::paginate(5);
        return view('admin.products.index', compact('article'));
    }
    // Mostrar vista de Nuevo Producto
    public function admin_products_create(){
        return view('admin.products.create');

    }
    // Crear Nuevo producto
    public function admin_products_store(Request $request){
        
       if($request->hasFile('file')){
            $file = $request->file('file');
            $nameFile = time()."_".$file->getClientOriginalName();
            $directionFile = public_path('img/products');
            $file->move($directionFile, $nameFile );
       }

       $article = new Article([
           'name'=>  $request->name,
           'details'=> $request->details,
           'price'=> $request->price,
           'description'=> $request->description,
           'file'=> $nameFile,
       ]);
        $article->save();
       return redirect()->route('admin.products.index');
      }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        // $request->validate([
        //     'name' => 'required',
        //     'file' => 'required',
        //     'datails' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        // ]);

    //    $open=$request->all();

    //      if ($url = $request->file('file')){ 
    //             $img_name = $url->getClientOriginalName();
    //             $url->move('img/products', $img_name);
    //             $open['ruta']=$img_name;

    //      }

    //      $article = Article::create($open);
    //         //  'name'=> $request->name,
    //         //  'details'=> $request->details,
    //         //  'price'=> $request->price,
    //         //  'description'=> $request->description,
    //         //  'file'=> $open,
         
         
         

    //         return redirect()->route('admin.products.index');
    
    // Mostrar edicion de Producto
    public function admin_products_edit($id){
        $article = Article::findOrFail($id);
        return view('admin.products.edit', compact('article'));

    }
    //Actualizar producto
    public function admin_products_update(Request $request, $id){
        $article = Article::findOrFail($id);
            $article->name = $request->name;
            $article->details = $request->details;
            $article->price = $request->price;
            $article->description = $request->description;
            $article->file= $request->file;
        $article->save();

            return redirect()->route('admin.products.index');

    }



    // Eliminar Producto
    public function admin_products_destroy($id){
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.products.index')->with('success_msg', 'Usuario Eliminado Exitosamente!');
        
    }
}
