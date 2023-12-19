<?php

namespace App\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Component
{
    public function render()
    {
       $view =  DB::table('products')->get();
        return view('livewire.product',[
            'view'=>$view
        ]);
    }

    // Store new product
   
  
        

    
    
}
