<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public String $message = "Welcome to Laravel Livewire with Alpine, BrowserSync and Tailwind JIT";
    public int $countClicks = 0;

    public function render()
    {
        return view('livewire.home');
    }

    public function updatedMessage($value){
        error_log("message updated " . $value);
    }

    public function updatedCountClicks($value){
        error_log("clicks updated " . $value);
    }

    public function incrementCounter(){
        error_log("helllo");
        $this->countClicks = $this->countClicks + 1;
    }
}
