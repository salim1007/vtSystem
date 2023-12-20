<?php

namespace App\Livewire\AdminPages;

use App\Models\Candidate;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public $candidate_name;

    #[Rule('required')]
    #[Rule(['images.*' => 'required|image|max:2048'])]
    public $images;
    public $image_path;

    public function uploadCandidatePhoto(){
        $this->validateOnly('images');
        if (is_array($this->images)) {
            foreach ($this->images as $image) {
                $image->store('candidateImages', 'public');
            }
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



    public function createCandidate(){
        $validated = $this->validate([
            'full_name'=>'required',
            'year'=>'required',
            'college'=>'required',
            'programme'=>'required',
            'description'=>'required',
            'post'=>'required',
        ]);

        $post_name = Post::where('post_code', $this->post)->value('post_title');
        $profile_picture_url = User::where('regNo', $this->reg_number)->value('photoUrl');

        if(Candidate::where('reg_no', $this->reg_number)->exists()){
            session()->flash('info','Candidate already exists!!');
            dd('exists');

        }else{
            Candidate::create([
                'full_name'=>$this->full_name,
                'year'=>$this->year,
                'college'=>$this->college,
                'programme'=>$this->programme,
                'reg_no'=>$this->reg_number,
                'post_code'=>$this->post,
                'post'=>$post_name,
                'description'=>$this->description,
                'photo_url'=>$profile_picture_url

            ]);

            $this->profile_pic = null;

            $this->reset('full_name','year','college','programme','post','description','reg_number');
            session()->flash('success','Candidate Added Successfully');
        }


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
