<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Home extends Component
{

    public $listeners = ["incrementEvent"=> "incrementCounter", "showDialogEvent"];
    public string $title = "Welcome to Laravel Livewire with Alpine, BrowserSync and Tailwind JIT";
    public string $message = "Welcome Aboard";
    public int $countClicks = 0;
    public $data;
    public bool $showDialog = false;

    public function render()
    {
        return view('livewire.home');
    }

    public function updatedMessage($value){
        error_log("message updated " . $value);
    }

    public function showDialogEvent(bool $value){
        $this->showDialog = $value;
    }

    public function updatedCountClicks($value){
        // Runs after any update to the Livewire component's data
        // (Using wire:model, not directly inside PHP)
        error_log("clicks updated " . $value);
    }

    public function incrementCounter(){
        // does not trigger updatedCountClicks event!
        $this->countClicks = $this->countClicks + 1;
    }

    public function emitIncrementEventToJSWithParam(){
        $this->dispatchBrowserEvent('incrementEventToJSWithParam',['newValue' => $this->countClicks + 1]);
    }

    public function emitIncrementEventToJSNoParam(){

        $this->dispatchBrowserEvent('incrementEventToJSNoParam');
    }
}
