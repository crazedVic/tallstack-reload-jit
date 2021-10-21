<?php

namespace App\Http\Livewire\Widget;

use App\Models\Product;
use Livewire\Component;

class Two extends Component
{
    public $listeners = ["showDialogEvent","saveProductEvent" => '$refresh'];

    public $products;

    public function render()
    {
        $this->products = Product::latest()->take(10)->get();
        return view('livewire.widget.two');
    }

    public function showDialogEvent(){
        error_log('Two - this should never fire, if emit up was used in the other widgets');
    }

}
