<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\User;


class NewProducts extends Component
{
    public $new_products;
    public $db_products;
    public Product $new_product;
    public Product $db_product;
    public $name;
    public $outcome;

    private $source = [
        ["name" => "soap", "status"=>"active", "price" => 299, "created_at" => "2021-07-05 16:41:41", "updated_at" => "2021-07-05 16:41:41"],
        ["name" => "detergent", "status"=>"active", "price" => 1299, "created_at" => "2021-07-05 16:41:41", "updated_at" => "2021-07-05 16:41:41"],
        ["name" => "toothbrush", "status"=>"active", "price" => 499, "created_at" => "2021-07-05 16:41:41", "updated_at" => "2021-07-05 16:41:41"],
   
    ];

    public $rules = [
        "name",
        "new_product.status" => 'nullable',
        "new_product.name" => 'nullable',
        "db_product.status" => 'nullable',
        "db_products.*.status" => "nullable",
        "new_products.*.status" => "nullable",
        "new_products.*.name" => "nullable"
    ];

    public function mount(){
        \DB::enableQueryLog();
        $this->db_products = Product::whereIn("id",[1,2,3])->get();
        $this->new_product = Product::make($this->source[0]);
        foreach ($this->source as $source){
            $new_products[] = Product::Make($source);
        }
        $this->new_products = \Illuminate\Database\Eloquent\Collection::make($new_products);
        $this->db_product = Product::where("id",3)->get()[0];
        $this->outcome = "Notice that new_product has loaded properties but only the STATUS field value ". 
            "persists between livewire renders.  Same with all the products in the new_products collection." .
            "Type in above input to see this destruction.";
    }

    public function changeFieldInRules(){
        $this->new_product->status = "Altered New Model";
        $this->db_product->status="Altered DB Model";
        $this->db_products[0]->status = "Altered Db in Collection[0]";
        $this->new_products[0]->status = "Altered New in Collection[0]";
        $this->outcome = "Changing a field value like STATUS that is listed in rules will persist ".
            "between refreshes in both new and db models.";
    }

    public function changeFieldNotInRules(){
        $this->new_product->price = 999999;
        $this->db_product->price= 99999;
        $this->db_products[0]->price = 99999;
        $this->new_products[0]->price =99999;
        $this->outcome = "Changing a field value like PRICE that is NOT listed in rules will " . 
                "be remove the field in all new models, and on db models it will be " . 
                "undone to the original value.";
    
    }

    public function changeInput(){
        $this->outcome = "Typing into an input bound to a wire:model will trigger a render.  " . 
            "Notice however that db_product and db_products, even though properties are not listed in " . 
            "rules they persist between renders.";
    }

    public function render()
    {
        return view('livewire.new-products');
    }

}
