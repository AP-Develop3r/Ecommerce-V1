<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Cart;
use League\CommonMark\Block\Element\Document;

class ClientController extends Controller {

    public function shop() {

        $products = Article::all();
        return view('client.home', compact('products'));
    }
    public function cart() {

        $cart = Article::all();
        return view('client.cart', compact('cart'));
    }
    public function add(Request$request){
        $product = Article::find($request->id);
        Cart::add(
            $product->id,
            $product->name,
            $product->price,
            $product->details,
            $product->quantity,
            $product->file,
            array("file"=>$product->file)

            // 'id' => $request->id,
            // 'name' => $request->name,
            // 'price' => $request->price,
            // 'quantity' => $request->quantity,
            // 'attributes' => array(
            //     'image' => $request->img,
            //     'slug' => $request->slug
            );
        
        return redirect()->route('client.cart')->with('success_msg', '¡El artículo se agregó al carrito!');
    }
    public function remove(Request $request){
        Cart::remove($request->id);
        return redirect()->route('client.cart')->with('success_msg', '¡El artículo es eliminado!');
    }

    public function update(Request $request){
        Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('client.cart')->with('success_msg', 'Cart is Updated!');
    }
    public function clear(){
        Cart::clear();
        return redirect()->route('client.cart')->with('success_msg', '¡El carrito de compras esta vacio!');
    }


    public function order(){ 
        $cartCollection = Cart::getContent();
        return view('client.order')->with(['cartCollection' => $cartCollection]);
        
    }



//evento yape





//nosotros
    public function nosotros(){ 
        return view('client.nosotros');
    }
//contacto
public function contact(){ 
    return view('client.contact');
}
//contacto
public function pages(){ 
    return view('client.pages');
}


}
