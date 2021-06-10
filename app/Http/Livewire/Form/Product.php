<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Product extends Component
{

    public string $name;
    public bool $showform = false;

    public function fun(){
        error_log("fun");
    }
    public function mount(){
        //$this->name = "edward";
        error_log("mounted");
        $this->fill(['name' => 'steve']);

    }

    public function hydrate(){
        error_log("hydrate");
    }

    public function updatedName($value){
        error_log($value);
    }

    public function render()
    {
        error_log("rendered");
        return view('livewire.form.product');
    }
}
