<?php

namespace App\Livewire\AdminPages;

use App\Models\Candidate;
use Livewire\Component;

class CreatePDF extends Component
{
    public $results;
    public function render()
    {
        $results = Candidate::all();
        return view('livewire.admin-pages.create-p-d-f',[
            'results'=>$results
        ]);
    }
}
