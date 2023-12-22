<?php

namespace App\Livewire\AdminPages;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCandList extends Component
{
    use WithPagination;
    public $search;
    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }


    public function render()
    {
        $candidate_details = Candidate::latest()->where(function ($query){
            $query->where('full_name','like',"%{$this->search}%")
                ->orWhere('reg_no','like',"%{$this->search}%");
        })->paginate(10);
        return view('livewire.admin-pages.admin-cand-list',[
            'candidates' => $candidate_details
        ]);
    }
}
