<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
      $view = DB::table('products')->sum('price');
        return view('livewire.dashboard',[
            'view'=>$view
        ]);
    }
}
