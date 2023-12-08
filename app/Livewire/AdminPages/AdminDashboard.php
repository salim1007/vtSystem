<?php

namespace App\Livewire\AdminPages;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $nummer = 65;
    public $nummor = 80;
    public $votedCount;
    public $notedCount;



    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }
    public function mount(){
        $this->votedCount = DB::table('users')->where('id', 1)->value('regNo');
        $this->notedCount = DB::table('users')->where('id', 3)->value('regNo');
    }


    public function render()
    {
        return view('livewire.admin-pages.admin-dashboard');
    }
}
