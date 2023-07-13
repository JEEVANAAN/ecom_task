<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $login =[
        'email' =>'',
        'password' =>''
    ];
    public function lsubmit(){
        // dd($this->login);
        $this->validate([
            'login.email' => 'required|email',
            'login.password' => 'required'
        ]);

        if (auth()->attempt($this->login)) {
            return redirect()->to('/a/1');
        }
        else {
            // dd('not sucessfull');
            session()->flash('message', 'your email or password error.');

        }
        
    }

    public function render()
    {
        return view('livewire.login');
    }
}
