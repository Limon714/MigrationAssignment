<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $sum = DB::table('products')->sum('price');
        $quantity = DB::table('products')->sum('quantity');

        $view = $sum * $quantity;
        return view('livewire.dashboard',[
            'view'=>$view
        ]);
    }
}
