<?php

namespace App\Livewire\AdminPages;

use Livewire\Component;

class AdminDashboard extends Component
{
    public $nummer = 65;
    public $nummor = 80;

    public function render()
    {
        return view('livewire.admin-pages.admin-dashboard');
    }
}
