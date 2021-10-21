<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class WidgetEvent extends Component
{

    public $listeners = ["showDialogEvent","saveProductEvent"];
    public $showModal = false;

    public function render()
    {
        return view('livewire.widget-event');
    }

    public function showDialogEvent(){
        error_log('dialog showing');
        $this->showModal = true;
    }

    public function saveProductEvent(){
        error_log('dialog hiding after new product');
        $this->showModal = false;
    }
}
