<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DynamicView extends Component
{
    public $date_is_in_btn = false;
    public function mount()
    {
        if(DB::table('election_dates')->exists()){
            $election = DB::table('election_dates')->first();
            $start_date = Carbon::parse($election->start_date);
            $end_date = Carbon::parse($election->end_date);
            $now = Carbon::now();

            $date_is_in_btn = $now->between($start_date, $end_date);

            if($date_is_in_btn){
                $this->date_is_in_btn = true;
            } else {
                $this->date_is_in_btn = false;

            }
        } else {
            dd('No dates have been submitted yet!');
        }
    }

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }


    public function render()
    {
        return view('livewire.dynamic-view');
    }
}
