<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    // Store new product
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->save();

        return redirect()->route('view_product')->with('success','Product added Successfully');
    }

    public function edit($id){
      $editProduct =   DB::table('products')->find($id);
        return view('livewire.edit-product',[
            'editProduct'=> $editProduct
        ]);
    }


    
}
