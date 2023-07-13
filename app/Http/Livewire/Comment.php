<?php

namespace App\Http\Livewire;

use App\Models\CustomerRegistration;
use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{

        public $comment;
        // =[
        //     [
        //     'body' => 'lorem the world ist took them the comment',
        //     'create'
        //     ]
        //     ];
        // public $comment =[];
        public $newdata;
        
            public function add(){
        
            // $this->validate(['newdata' => 'required']);
            
              $insert = CustomerRegistration::create(['name' =>$this->newdata, 
              'email'=>"jee@gmail.com",
                 'password'=>12345678]);
                //  dd($insert);
                $this->comment->push($insert);
                
                // array_unshift($this->comment,
                // [
                //     'body' => $this->newdata,
                //     'create' => Carbon::now()->diffForHumans()
                // ]);
                $this->newdata="";

            }

            

    public function mount($incomments){
        // dd($incomments);
        $this->comment = $incomments;
    }
    public function remove($commentsid){
        // dd($commentsid);
        $delete = CustomerRegistration::find($commentsid);
        $delete->delete(); 
        $this->comment = $this->comment->except($commentsid);
    }

    public function render()
    {
        return view('livewire.comment');
    }
}
