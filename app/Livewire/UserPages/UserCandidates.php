<?php

namespace App\Livewire\UserPages;

use App\Models\Candidate;
use App\Models\CandidatePhoto;
use App\Models\CandidateVideo;
use Livewire\Component;
use Livewire\WithPagination;

class UserCandidates extends Component
{
    use WithPagination;

    public $search;
    public $campaign;
    public $campaign_photos;
    public $open_campaign_window = false;
    public $open_photo_window = false;
    public $candidate_name = false;

    public function closeCampaignWindow(){
        $this->open_campaign_window = false;

    }
    public function closeCampaignPhotoWindow()
    {
        $this->open_photo_window = false;
    }

    public function viewCampaign($id){
        $this->open_campaign_window = true;
        $candidate = Candidate::where('id',$id)->first();
        $this->campaign = CandidateVideo::where('reg_no',$candidate->reg_no)->get();
        $this->candidate_name = Candidate::where('id', $id)->value('full_name');


    }
    public function viewPhotos($id){
        $this->open_photo_window = true;
        $candidate = Candidate::where('id',$id)->first();
        $this->campaign_photos = CandidatePhoto::where('reg_no', $candidate->reg_no)->get();
        $this->candidate_name = Candidate::where('id', $id)->value('full_name');


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
