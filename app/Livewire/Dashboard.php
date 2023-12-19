<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
<<<<<<< HEAD
        $sum = DB::table('products')->sum('price');
        $quantity = DB::table('products')->sum('quantity');

        $view = $sum * $quantity;
=======
      $view = DB::table('products')->sum('price');
>>>>>>> c26f7eea498ed1fc70773b94ea7d0b6cce310687
        return view('livewire.dashboard',[
            'view'=>$view
        ]);
    }
}
