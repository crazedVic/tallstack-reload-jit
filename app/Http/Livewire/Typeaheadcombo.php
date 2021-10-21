<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Typeaheadcombo extends Component
{

    private $actionChoices = [
        ["id" => 0, "name" => "one" ],
        ["id" => 1, "name" => "two" ],
        ["id" => 2, "name" => "trhee" ],
        ["id" => 3, "name" => "four" ],

    ];

    public $rules = [
        "comment" => "nullable",
        "action" => "nullable"
    ];

    public $action ="";
    public $comment;

    public function render()
    {
        return view('livewire.typeaheadcombo',
        ["actionChoices" => array_filter($this->actionChoices,
            function($v,$k) {
                return $this->action == "" || strpos($v["name"], $this->action ) > -1;
            }, ARRAY_FILTER_USE_BOTH)]);
    }

    public function chooseAction($id){
        $this->action = $this->actionChoices[$id]["name"];
    }

    public function save(){
        //
    }
}
