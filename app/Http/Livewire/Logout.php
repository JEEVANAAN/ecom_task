<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Logout extends Component
{  
    public function logout() {

        Auth::logout();
        
        return redirect()->to('/');    }

    public function render()
    {
        return view('livewire.logout');
    }
}