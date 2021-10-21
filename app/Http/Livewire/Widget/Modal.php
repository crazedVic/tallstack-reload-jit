<?php

namespace App\Http\Livewire\Widget;

use App\Models\Product;
use Livewire\Component;


class Modal extends Component
{
    public function render()
    {
        return view('livewire.widget.modal');
    }

    public function save(){
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $status = array("active","inactive");
        $product = Product::create([
            "name" => $faker->vehicle,
            "status" => $status[array_rand($status)],
            "price" => $faker->randomNumber(5),
            "created_at" => now(),
            "updated_at" => now()

        ]);
        $this->emit('saveProductEvent');
    }
}
