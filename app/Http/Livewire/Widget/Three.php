<?php

namespace App\Http\Livewire\Widget;

use App\Models\Product;
use Livewire\Component;

class Three extends Component
{
    public $listeners = ["showDialogEvent","saveProductEvent" => '$refresh'];

    public $products;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.widget.three');
    }

    public function showDialogEvent(){
        error_log('Three - this should never fire, if emit up was used in the other widgets');
    }
}
