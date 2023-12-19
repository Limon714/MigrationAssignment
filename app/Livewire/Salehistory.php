<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;

class Salehistory extends Component
{
    public function render()
    {
        $view = DB::table('products')->get();
        return view('livewire.salehistory',[
            'view'=>$view
        ]);
        
    }

    public function sell($id){
        $editSell =   DB::table('products')->find($id);
          return view('livewire.salehistory',[
              'editSell'=> $editSell
          ]);
      }

    public function update(Request $request){

        DB::table('products')->where('id','=',$request->id)->update([
               
                'price'=>$request->input('price'),
                'quantity'=>$request->input('quantity'),
        ]);

        return redirect()->route('view_product');
    }
}
