<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class Product extends Component
{

    public string $name;
    public bool $showform = false;
    public string $status = "Call number 0";
    public int $counter =0;
    public string $dirtyProperty ="Original";

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

    public function longFunctionCall(){
        error_log('long running call started');
        sleep(3);
        $this->counter++;
        $this->status = "Call number " . $this->counter;
    }

    public function longFunctionCall2(){
        error_log('long running call started');
        sleep(3);
        $this->counter++;
        $this->status = "Call number " . $this->counter;
    }

    public function getGeo($ipAddress){
        return "lat, long";
    }
}
