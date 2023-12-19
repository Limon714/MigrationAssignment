<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;

class EditProduct extends Component
{
    public function render()
    {
       $sum =  DB::table('products')->sum('price'); 
       return view('livewire.dashboard');
    }
    
    public function edit($id){
        $editProduct =   DB::table('products')->find($id);
          return view('livewire.edit-product',[
              'editProduct'=> $editProduct
          ]);
      }

      
    public function update(Request $request){

        DB::table('products')->where('id','=',$request->id)->update([
                'name'=>$request->input('name'),
                'price'=>$request->input('price'),
                'quantity'=>$request->input('quantity'),
        ]);

        return redirect()->route('view_product');
    }

    public function delete(Request $request){
        DB::table('products')
        ->where('id','=',$request->id)
        ->delete();

        return redirect()->route('view_product');
    }


}
