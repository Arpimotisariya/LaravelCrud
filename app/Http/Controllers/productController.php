<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function index(){
        $product = product::get();
        return view('products.index', ['product'=>$product]);
    }


    public function create(){
        return view('products.create')->with('errors', collect([])); 
    }
    

    public function show($id){
        return view('products.create');
    }
    


    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
    
        $product = new product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
    
        return redirect()->route('products.index')->withSuccess('Product created successfully!');
    }


    public function edit($id){
        $product = product::findOrFail($id);
        return view('products.edit', ['product'=>$product]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
    
        $product = product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
    
        return redirect()->route('products.index')->withSuccess('Product updated successfully!');
    }

    public function delete($id){
    $product = product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->withSuccess('Product deleted successfully!');
}

    
}
