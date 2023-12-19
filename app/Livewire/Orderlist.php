<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Orderlist extends Component
{
    public function render()
    {
        
        $view =  DB::table('products')->get();
        return view('livewire.orderlist',[
            'view'=>$view,
            
        ]);
    }
}
