<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'description'=>'required|max:255|string',
            'price' => 'required|numeric',
        ]);
        Product::create([
            'name'=>$request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect('products/create');
    }
    public function edit(int $id){
        $product = Product::findOrFail($id);
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,int $id){
        Product::findOrFail($id)->update([
            'name'=>$request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        $products = Product::get();
        return view('product.read',compact('products'));
    }
    public function delete(int $id){
        $product = Product::find($id);
        $product->delete();
        $products = Product::get();
        return view('product.read',compact('products'));
    }
}
