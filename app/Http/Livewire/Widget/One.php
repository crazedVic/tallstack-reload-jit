<?php

namespace App\Http\Livewire\Widget;

use App\Models\Product;
use Livewire\Component;

class One extends Component
{

    public $listeners = ["showDialogEvent","saveProductEvent" => '$refresh'];
    public $products;

    public function render()
    {
        $this->products = Product::latest()->take(10)->get();
        return view('livewire.widget.one');
    }

    public function showDialog(){
        //should emit something to launch dialog (which lives in WidgetEvent)
        // emit the event up so only parent should hear it.
        $this->emitUp('showDialogEvent');
        error_log('show dialog');
    }

    public function showDialogEvent(){
        error_log('One - this should never fire, if emit up was used in the other widgets');
    }
}
