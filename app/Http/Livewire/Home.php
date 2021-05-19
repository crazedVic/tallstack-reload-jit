<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{

    public String $message = "Welcome to Laravel Livewire with Alpine and Tailwind";

    public function render()
    {
        return view('livewire.home');
    }
}
