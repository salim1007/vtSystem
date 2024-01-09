<?php

namespace App\Livewire\AdminPages;

use App\Models\Candidate;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboard extends Component
{
    public $voted_count;
    public $not_voted_count;
    public $selectedOption = 1;
    public $users_list = [];



    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }
    public function mount(){
        $total_users = User::all()->count();
        $voted_users = 0;
        foreach (DB::table('users')->get() as $user ){
            if (DB::table('votes')->where('voter_reg_no', $user->regNo)->exists()){
                $voted_users++;
            }
        }
        $this->voted_count = $voted_users;
        $this->not_voted_count = $total_users - $voted_users;



    }

    public function setFilterValue($value)
    {
        $this->selectedOption = $value;

     if($this->selectedOption == 2){
         $this->users_list = DB::table('users')
             ->join('votes', 'users.regNo', '=', 'votes.voter_reg_no')
             ->select('users.*')
             ->distinct('users.regNo')
             ->get();


     }elseif ($this->selectedOption == 3){
         $this->users_list = DB::table('users')
             ->leftJoin('votes', 'users.regNo', '=', 'votes.voter_reg_no')
             ->whereNull('votes.voter_reg_no')
             ->select('users.*')
             ->get();

     }

    }


    public function render()
    {
        $total_users = User::all()->count();
        $total_candidates = Candidate::all()->count();
        $total_posts = Post::all()->count();
        return view('livewire.admin-pages.admin-dashboard',[
            'total_users' => $total_users,
            'total_candidates' => $total_candidates,
            'total_posts' => $total_posts,
        ]);
    }
}
