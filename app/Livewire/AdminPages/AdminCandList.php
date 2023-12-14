<?php

namespace App\Livewire\AdminPages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminCandList extends Component
{
    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }
    public function render()
    {
        return view('livewire.admin-pages.admin-cand-list');
    }
}
