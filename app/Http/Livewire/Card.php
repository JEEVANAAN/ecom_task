<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    protected $listeners = ['postAdded'];
    public function postAdded($id,$productid){
        dd('hello');
    }

    public function render()
    {
        return view('livewire.card');
    }
}
