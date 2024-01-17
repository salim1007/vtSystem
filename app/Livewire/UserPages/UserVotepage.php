<?php

namespace App\Livewire\UserPages;

use App\Models\Candidate;
use App\Models\Post;
use App\Models\Vote;
use Livewire\Component;

class UserVotepage extends Component
{
    public $voter_choice_0003;
    public $voter_choice_0006;
    public $voter_choice_0009;
    public $voter_choice_0012;
    public $voter_choice_0015;
    public $voter_choice_0018;
    public $voter_choice_0021;
    public $voter_choice_0024;
    public $voter_choice_0027;
    public $voter_choice_0030;
    public $voter_choice_0033;
    public $voter_choice_0036;
    public $voter_choice_0039;
    public $voter_choice_0042;
    public $voter_choice_0045;
    public $voter_choice_0048;
    public $voter_choice_0051;
    public $voter_choice_0054;
    public $voter_choice_0057;
    public $voter_choice_0060;
    public $voter_choice_0063;
    public $voter_choice_0066;
    public $voter_choice_0069;


    public function submitVote0003()
    {
        $this->validate([
            'voter_choice_0003' => 'required',
        ]);


        $post = Post::where('post_code', 0003)->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0003,
        ]);


        session()->flash('success_vote', 'Vote casted successfully!');

    }


    public function submitVote0006()
    {
        $this->validate([
            'voter_choice_0006' => 'required',
        ]);


        $post = Post::where('post_code', 0006)->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0006,
        ]);


        session()->flash('success_vote', 'Vote casted successfully!');

    }

    public function submitVote0009()
    {
        $this->validate([
            'voter_choice_0009' => 'required',
        ]);


        $post = Post::where('post_code', "0009")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0009,
        ]);


        session()->flash('success_vote', 'Vote casted successfully!');

    }

    public function submitVote0012()
    {
        $this->validate([
            'voter_choice_0012' => 'required',
        ]);

        $post = Post::where('post_code', 0012)->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0012,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0015()
    {
        $this->validate([
            'voter_choice_0015' => 'required',
        ]);

        $post = Post::where('post_code', "0015")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0015,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0018()
    {
        $this->validate([
            'voter_choice_0018' => 'required',
        ]);

        $post = Post::where('post_code', "0018")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0018,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0021()
    {
        $this->validate([
            'voter_choice_0021' => 'required',
        ]);

        $post = Post::where('post_code', "0021")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0021,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0024()
    {
        $this->validate([
            'voter_choice_0024' => 'required',
        ]);

        $post = Post::where('post_code', "0024")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0024,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0027()
    {
        $this->validate([
            'voter_choice_0027' => 'required',
        ]);

        $post = Post::where('post_code', "0027")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0027,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0030()
    {
        $this->validate([
            'voter_choice_0030' => 'required',
        ]);

        $post = Post::where('post_code', "0030")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0030,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0033()
    {
        $this->validate([
            'voter_choice_0033' => 'required',
        ]);

        $post = Post::where('post_code', "0033")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0033,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0036()
    {
        $this->validate([
            'voter_choice_0036' => 'required',
        ]);

        $post = Post::where('post_code', "0036")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0036,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0039()
    {
        $this->validate([
            'voter_choice_0039' => 'required',
        ]);

        $post = Post::where('post_code', "0039")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0039,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0042()
    {
        $this->validate([
            'voter_choice_0042' => 'required',
        ]);

        $post = Post::where('post_code', "0042")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0042,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0045()
    {
        $this->validate([
            'voter_choice_0045' => 'required',
        ]);

        $post = Post::where('post_code', "0045")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0045,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0048()
    {
        $this->validate([
            'voter_choice_0048' => 'required',
        ]);

        $post = Post::where('post_code', "0048")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0048,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0051()
    {
        $this->validate([
            'voter_choice_0051' => 'required',
        ]);

        $post = Post::where('post_code', "0051")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0051,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0054()
    {
        $this->validate([
            'voter_choice_0054' => 'required',
        ]);

        $post = Post::where('post_code', "0054")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0054,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0057()
    {
        $this->validate([
            'voter_choice_0057' => 'required',
        ]);

        $post = Post::where('post_code', "0057")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0057,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0060()
    {
        $this->validate([
            'voter_choice_0060' => 'required',
        ]);

        $post = Post::where('post_code', "0060")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0060,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0063()
    {
        $this->validate([
            'voter_choice_0063' => 'required',
        ]);

        $post = Post::where('post_code', "0063")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0063,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0066()
    {
        $this->validate([
            'voter_choice_0066' => 'required',
        ]);

        $post = Post::where('post_code', "0066")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0066,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }

    public function submitVote0069()
    {
        $this->validate([
            'voter_choice_0069' => 'required',
        ]);

        $post = Post::where('post_code', "0069")->value('post_title');

        Vote::create([
            'voter_reg_no' => auth()->user()->regNo,
            'post' => $post,
            'candidate_chosen' => $this->voter_choice_0069,
        ]);

        session()->flash('success_vote', 'Vote casted successfully!');
    }


    public function successVote()
    {
        session()->flash('success_vote', null);
    }
    public function render()
    {
        $post_title_0003 = Post::where('post_code', 0003 )->value('post_title');
        $post_title_0006 = Post::where('post_code', 0006 )->value('post_title');
        $post_title_0009 = Post::where('post_code', "0009" )->value('post_title');
        $post_title_0012 = Post::where('post_code', "0012" )->value('post_title');
        $post_title_0015 = Post::where('post_code', "0015" )->value('post_title');
        $post_title_0018 = Post::where('post_code', "0018" )->value('post_title');
        $post_title_0021 = Post::where('post_code', "0021" )->value('post_title');
        $post_title_0024 = Post::where('post_code', "0024" )->value('post_title');
        $post_title_0027 = Post::where('post_code', "0027" )->value('post_title');
        $post_title_0030 = Post::where('post_code', "0030" )->value('post_title');
        $post_title_0033 = Post::where('post_code', "0033" )->value('post_title');
        $post_title_0036 = Post::where('post_code', "0036" )->value('post_title');
        $post_title_0039 = Post::where('post_code', "0039" )->value('post_title');
        $post_title_0042 = Post::where('post_code', "0042" )->value('post_title');
        $post_title_0045 = Post::where('post_code', "0045" )->value('post_title');
        $post_title_0048 = Post::where('post_code', "0048" )->value('post_title');
        $post_title_0051 = Post::where('post_code', "0051" )->value('post_title');
        $post_title_0054 = Post::where('post_code', "0054" )->value('post_title');
        $post_title_0057 = Post::where('post_code', "0057" )->value('post_title');
        $post_title_0060 = Post::where('post_code', "0060" )->value('post_title');
        $post_title_0063 = Post::where('post_code', "0063" )->value('post_title');
        $post_title_0066 = Post::where('post_code', "0066" )->value('post_title');
        $post_title_0069 = Post::where('post_code', "0069" )->value('post_title');

        $this->voter_choice_0003 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0003)->value('candidate_chosen');
        $this->voter_choice_0006 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0006)->value('candidate_chosen');
        $this->voter_choice_0009 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0009)->value('candidate_chosen');
        $this->voter_choice_0012 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0012)->value('candidate_chosen');
        $this->voter_choice_0015 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0015)->value('candidate_chosen');
        $this->voter_choice_0018 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0018)->value('candidate_chosen');
        $this->voter_choice_0021 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0021)->value('candidate_chosen');
        $this->voter_choice_0024 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0024)->value('candidate_chosen');
        $this->voter_choice_0027 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0027)->value('candidate_chosen');
        $this->voter_choice_0030 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0030)->value('candidate_chosen');
        $this->voter_choice_0033 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0033)->value('candidate_chosen');
        $this->voter_choice_0036 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0036)->value('candidate_chosen');
        $this->voter_choice_0039 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0039)->value('candidate_chosen');
        $this->voter_choice_0042 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0042)->value('candidate_chosen');
        $this->voter_choice_0045 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0045)->value('candidate_chosen');
        $this->voter_choice_0048 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0048)->value('candidate_chosen');
        $this->voter_choice_0051 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0051)->value('candidate_chosen');
        $this->voter_choice_0054 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0054)->value('candidate_chosen');
        $this->voter_choice_0057 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0057)->value('candidate_chosen');
        $this->voter_choice_0060 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0060)->value('candidate_chosen');
        $this->voter_choice_0063 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0063)->value('candidate_chosen');
        $this->voter_choice_0066 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0066)->value('candidate_chosen');
        $this->voter_choice_0069 = Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0069)->value('candidate_chosen');

        return view('livewire.user-pages.user-votepage',[
            'post_title_0003' => $post_title_0003,
            'post_title_0006' => $post_title_0006,
            'post_title_0009' => $post_title_0009,
            'post_title_0012' => $post_title_0012,
            'post_title_0015' => $post_title_0015,
            'post_title_0018' => $post_title_0018,
            'post_title_0021' => $post_title_0021,
            'post_title_0024' => $post_title_0024,
            'post_title_0027' => $post_title_0027,
            'post_title_0030' => $post_title_0030,
            'post_title_0033' => $post_title_0033,
            'post_title_0036' => $post_title_0036,
            'post_title_0039' => $post_title_0039,
            'post_title_0042' => $post_title_0042,
            'post_title_0045' => $post_title_0045,
            'post_title_0048' => $post_title_0048,
            'post_title_0051' => $post_title_0051,
            'post_title_0054' => $post_title_0054,
            'post_title_0057' => $post_title_0057,
            'post_title_0060' => $post_title_0060,
            'post_title_0063' => $post_title_0063,
            'post_title_0066' => $post_title_0066,
            'post_title_0069' => $post_title_0069,

        ]);
    }
}
