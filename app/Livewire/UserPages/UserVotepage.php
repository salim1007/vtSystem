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

//        dd('voted successfully!');

        session()->flash('success', 'Vote casted successfully!');

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

//        dd('voted for 0006 successfully!');

        session()->flash('success', 'Vote casted successfully!');

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

//        dd('voted for 0006 successfully!');

        session()->flash('success', 'Vote casted successfully!');

    }
    public function render()
    {
        $post_title_0003 = Post::where('post_code', 0003 )->value('post_title');
        $post_title_0006 = Post::where('post_code', 0006 )->value('post_title');
        $post_title_0009 = Post::where('post_code', "0009" )->value('post_title');
        $this->voter_choice_0003= Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0003)->value('candidate_chosen');
        $this->voter_choice_0006= Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0006)->value('candidate_chosen');
        $this->voter_choice_0009= Vote::where('voter_reg_no', auth()->user()->regNo)->where('post', $post_title_0009)->value('candidate_chosen');
        return view('livewire.user-pages.user-votepage');
    }
}
