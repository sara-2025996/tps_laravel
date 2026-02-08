<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // tableau comme attribut
    public $products=[
        ['id'=>1,'img'=>'1.jpg','title'=>'test1','price'=>222],
        ['id'=>2,'img'=>'2.jpg', 'title'=>'test2','price'=>123],
        [ 'id'=>3,'img'=>'3.jpg', 'title'=>'test3','price'=>825]
    ];



    function index () {

    return view('layout.product',['products'=>$this->products]);
}
    //
    function show ($id) {

    $product =  $this->products[$id-1]; //chercher par index
    return view('products.show',compact('product'));

}

function creat () {
return view('products.creat');
}

 public function store(Request $request)
    {
        // récupérer les données
        $title = $request->title;
        $price = $request->price;
        $desc = $request->desc;

        
        $request->validate([
        'title' => 'required|min:3|string',
        'price' => 'required|numeric',
        'desc' => 'required|min:10'
    ]);
    return redirect()->route('products.creat')->with('success','Produit ajouté avec succès');
    }

}
