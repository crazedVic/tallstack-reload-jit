<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductsLW extends Component
{

    public $products;
    public $mode = "active";

    public function render()
    {
        $this->products = Product::where('status',$this->mode)->get();
        return view('livewire.products-l-w');
    }

    public function toggle(Product $product){
        if($product->status == "active"){
            $product->status = "inactive";
        }
        else{
            $product->status = "active";
        }
        $product->save();
    }

    public function filter(){
        $this->mode = $this->mode == "active" ? "inactive" : "active";
    }
}
