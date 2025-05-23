<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index(){

       
       

        return view('products.index' , [
            'produkto' => Product:: orderBy('created_at')->paginate(1)
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(SaveProductRequest $request){


        
        $product = Product::create($request->validated());

        return redirect()->route('products.show',$product)->with('status','Product Created');
    }

    public function show(Product $product){
 
       
        return view('products.show',compact('product'));
    }

    public function edit(Product $product){
        return view('products.edit',compact('product'));
    }

    public function update(SaveProductRequest $request,Product $product){
        $product->update($request->validated());

        return redirect()->route('products.show',$product)->with('status','Product Updated');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('products.index')->with('status','Product Deleted');
    }
}
