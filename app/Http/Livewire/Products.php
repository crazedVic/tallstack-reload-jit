<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $products;
    public $array_products;
    public $currentProduct;// =  ["id" => 1, "name" => "soap", "price" => 299];
    public $prodName = "toilettries";

    private $source = [
        0 => ["id" => 1, "name" => "soap", "price" => 299],
        1 => ["id" => 2, "name" => "shampoo", "price" => 399],
        2 => ["id" => 3, "name" => "brush", "price" => 499],
        3 => ["id" => 4, "name" => "comb", "price" => 799],
        4 => ["id" => 5, "name" => "facecloth", "price" => 1299]
    ];

    public function mount(){
        $temp=[];
        foreach ($this->source as $product){
            $temp[$product['id']] = new Product($product);
            $this->array_products[] = new Product($product);
        }
        $this->products = $temp; 
        $this->currentProduct = (array) json_decode(json_encode($this->array_products[0]));
       // error_log($this->currentProduct->name);
    }

    public function render()
    {
       // error_log($this->currentProduct->name);
        return view('livewire.products');
    }

    public function deleteProductById($id){
        unset($this->products[$id]);
    }

    public function showProduct($product){

        dd(["alpinejs"=>$product,"livewire" => $this->currentProduct]);
    }

    public function showProductName($prodName){

         dd(["alpinejs"=>$prodName,"livewire" =>  $this->prodName]);
     }

    public function deleteProductByObject($product){
        $key = $product["id"];
        $new_array = array_filter($this->array_products, function ($element) use ($key) { return ($element["id"] != $key); } );
        $this->array_products = [];

        foreach ($new_array as $row){
            $this->array_products[] = $row;
        }
    }

    public function showStateArray($products, $array_products){
        // $this->products = $products;
        dd(["alpinejs-assoc"=>$this->products, 
            "alpinejs-simple" => $array_products,
            "livewire-assoc" => $this->products, 
            "livewire-simple" => $this->array_products]);

    }
}
