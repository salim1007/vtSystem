<?php

namespace App\Livewire\AdminPages;

use App\Models\Candidate;
use App\Models\CandidatePhoto;
use App\Models\CandidateVideo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminCandidateCreator extends Component
{
    use WithFileUploads;
    public $reg_number;
    public $profile_pic;
    public $reg_no;
    public $full_name;
    public $post;
    public $year;
    public $programme;
    public $college;
    public $description;
    public $upload_reg_no;
    public $upload_reg_no2;
    public $candidate_name;
    public $candidate_name2;

    #[Rule('required')]
    #[Rule(['images.*' => 'image|max:2048'])]
    public $images;
    #[Rule('required')]
    #[Rule(['videos.*' =>'video|mimetypes:video/mp4'])]
    public $videos;
    public $image_path;
    public $video_path;

    public $received_ID;


    public function uploadCandidatePhoto(){
        $this->validateOnly('images');
        if($this->upload_reg_no) {
            if (is_array($this->images)) {
                foreach ($this->images as $image) {
                    $this->image_path = $image->store('candidateImages', 'public');

                    CandidatePhoto::create([
                        'reg_no' => $this->upload_reg_no,
                        'photo_url' => $this->image_path
                    ]);
                }
            }


            $this->images = null;
            $this->upload_reg_no = null;
            $this->candidate_name = null;
            session()->flash('success_photo', 'Photos uploaded successfully!');
        }else{
            session()->flash('reg_no_not_found','The registration number is required!');
        }

    }

    public function uploadCandidateVideo(){
        $this->validateOnly('videos');
        if($this->upload_reg_no2) {
            if (is_array($this->videos)) {
                foreach ($this->videos as $video) {
                    $this->video_path = $video->store('CandidateVideos', 'public');

                   CandidateVideo::create([
                        'video_url' => $this->video_path,
                        'reg_no' => $this->upload_reg_no2
                    ]);

                }

            }

            $this->upload_reg_no2 = null;
            $this->videos = null;

            session()->flash('success_video', 'Videos uploaded successfully!');

        }else{
            session()->flash('reg_no_not_found','The registration number is required!');
        }

    }

    public function findCandidate(){
        $validated = $this->validate([
            'upload_reg_no' => 'required'
        ]);

        $user_reg_no = Candidate::where('reg_no', $this->upload_reg_no)->first();
        if($user_reg_no){
            $this->candidate_name = $user_reg_no->full_name;
        }else{
            session()->flash('error','Candidate not found!');
        }
    }

    public function findCandidate2(){
        $validated = $this->validate([
            'upload_reg_no2' => 'required'
        ]);

        $user_reg_no2 = Candidate::where('reg_no', $this->upload_reg_no2)->first();
        if($user_reg_no2){
            $this->candidate_name2 = $user_reg_no2->full_name;
        }else{
            session()->flash('error','Candidate not found!');
        }
    }



    public function createCandidate(){
        $validated = $this->validate([
            'full_name'=>'required',
            'year'=>'required',
            'college'=>'required',
            'programme'=>'required',
            'description'=>'required',
            'post'=>'required',
        ]);

        $candidate = Candidate::latest()->first();

        if ($candidate){
            $code = $candidate->cand_idty + 2;
            $candidate_identity = str_pad($code, 3,0,STR_PAD_LEFT);

        }else {
            $code = 0;
            $code = $code + 2;
            $candidate_identity = str_pad($code, 3, 0, STR_PAD_LEFT);
        }


        $post_name = Post::where('post_code', $this->post)->value('post_title');
        $profile_picture_url = User::where('regNo', $this->reg_number)->value('photoUrl');

        if(Candidate::where('reg_no', $this->reg_number)->exists()){
            session()->flash('success_error','Candidate already exists!!');

        }else{
            if($profile_picture_url){
                Candidate::create([
                    'full_name'=>$this->full_name,
                    'year'=>$this->year,
                    'college'=>$this->college,
                    'programme'=>$this->programme,
                    'reg_no'=>$this->reg_number,
                    'post_code'=>$this->post,
                    'post'=>$post_name,
                    'cand_idty' => $candidate_identity,
                    'description'=>$this->description,
                    'photo_url'=>$profile_picture_url

                ]);

                $this->profile_pic = null;

                $this->reset('full_name','year','college','programme','post','description','reg_number');
                session()->flash('success_candidate','Candidate Created Successfully');
            }else{
                session()->flash('photo_error', 'User has no photo!');
            }

        }



    }

    public function closeMessage()
    {
        session()->flash('success_candidate', null);

    }
    public function closeError()
    {
        session()->flash('success_error', null);

    }
    public function closePhotoError()
    {
        session()->flash('photo_error', null);

    }
    public function closeVideoError()
    {
        session()->flash('reg_no_not_found', null);

    }
    public function closeVideoMessage()
    {
        session()->flash('success_video', null);

    }
    public function setRegNumber(){
        $validated = $this->validate([
            'reg_number'=>'required'
        ]);
        $user = DB::table('users')->where('regNo', $this->reg_number)->first();
        if($user){
            $this->full_name = $user->firstname.' '.$user->midname.' '.$user->surname;
            $this->year = $user->yearOfStudy;
            $this->college = $user->college;
            $this->programme = $user->programme;
            $this->profile_pic = $user->photoUrl;

        }


    }

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }
    public function render()
    {
        $postlist = Post::all();
        return view('livewire.admin-pages.admin-candidate-creator',[
            'post_list'=>$postlist
        ]);
    }
}
