<?php

namespace App\Http\Livewire;

use App\Models\card;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\types;
use Livewire\Component;

class ShowUser extends Component
{
    // public $user; 
    // public $comment;  
    // public $size;
    // public $color;
    // public $list;
    // public $addcard; 

    // public function mount($id) { 
    //     // dd($id);
    //    $this->comment = types::where('id', $id)->get();
    //    $this->size = Size::all();
    //     $this->color = Color::all();
    //     $this->list = Category::all();
    //     $this->addcard = card:: where ('cashes_id','=',auth()->id())->count();
    //     // dd($this->user);
    //  }
    // public function render()
    // {
    //     return view('livewire.show-user');
    // }
}
