<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DynamicView extends Component
{

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }


    public function render()
    {
        return view('livewire.dynamic-view');
    }
}
