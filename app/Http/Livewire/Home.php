<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $listeners = ["incrementEvent"=> "incrementCounter"];
    public string $title = "Welcome to Laravel Livewire with Alpine, BrowserSync and Tailwind JIT";
    public String $message = "Welcome Aboard";
    public int $countClicks = 0;

    public function render()
    {
        return view('livewire.home');
    }

    public function updatedMessage($value){
        error_log("message updated " . $value);
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
