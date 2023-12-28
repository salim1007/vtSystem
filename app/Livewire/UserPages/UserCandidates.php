<?php

namespace App\Livewire\UserPages;

use App\Models\Candidate;
use App\Models\CandidateVideo;
use Livewire\Component;
use Livewire\WithPagination;

class UserCandidates extends Component
{
    use WithPagination;

    public $search;
    public $campaign;
    public $open_campaign_window = false;
    public $open_photo_window = false;

    public function viewCampaign($reg_no){
        $this->open_campaign_window = true;
        $candidate = Candidate::where('id',$reg_no)->first();
        $this->campaign = CandidateVideo::where('reg_no',$candidate->reg_no)->get();

    }
    public function viewPhotos($reg_number){
        $this->open_photo_window = true;
        $candidate = Candidate::where('id',$reg_number)->first();

    }
    public function render()
    {
        $candidates = Candidate::latest()->where(function ($query){
            $query->where('full_name','like',"%{$this->search}%")
                ->orWhere('post','like',"%{$this->search}%");
        })->paginate(50);
        return view('livewire.user-pages.user-candidates',[
            'candidates' => $candidates
        ]);
    }
}
