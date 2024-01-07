<?php

namespace App\Livewire\AdminPages;

use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminProgressPage extends Component
{
    public $no_of_votes;

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }

    public function render()
    {
        return view('livewire.admin-pages.admin-progress-page');
    }
}
