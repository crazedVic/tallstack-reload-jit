<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public String $message = "Welcome to Laravel Livewire with Alpine, BrowserSync and Tailwind JIT";

    public function render()
    {
        return view('livewire.home');
    }
}
