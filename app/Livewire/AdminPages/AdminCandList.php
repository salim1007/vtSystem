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
    public $candidate_description;
    public $post;
    public $candidate_name;
    public $editing_id;
    public $open_edit_tab = false;
    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }

    public function openEditTab($edit_id){
        $this->editing_id = $edit_id;
        $candidate = Candidate::find($edit_id);
        $this->candidate_name = $candidate->full_name;
        $this->post = $candidate->post;
        $this->candidate_description = $candidate->description;
        $this->open_edit_tab = true;

    }

    public function editCandidate($candidate_id){
        $validated = $this->validate([
            'post' => 'required',
            'candidate_description' => 'required'
        ]);

        $candidate = Candidate::find($candidate_id);
        $candidate->update([
            'post' => $this->post,
            'description' => $this->candidate_description
        ]);


        $this->closeModal();

        session()->flash('success','Candidate updated successfully!');
    }
    public function closeModal(){
        $this->open_edit_tab = false;
        $this->editing_id = null;
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
