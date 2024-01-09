<?php

namespace App\Livewire\AdminPages;

use App\Models\ElectionDate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminSettings extends Component
{
    public $start_date;
    public $end_date;


    public function submitElectionDates()
    {
        $this->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        if(DB::table('election_dates')->exists()){
            dd('date already specified!');
        }else{
            $start_date = Carbon::parse($this->start_date);
            $end_date = Carbon::parse($this->end_date);

            $election = new ElectionDate();
            $election->start_date = Carbon::create($start_date->year, $start_date->month, $start_date->day, 0, 0, 0);
            $election->end_date = Carbon::create($end_date->year, $end_date->month, $end_date->day, 0, 0, 0);
            $election->save();

            dd('dates successfully submitted!');
        }


    }

    public function UpdateTimer()
    {
        $get_date = ElectionDate::first();
        $get_date->delete();

        dd('Set new Timer duration!! ');

    }

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }
    public function render()
    {
        $election = ElectionDate::first();
        $start_Date = null;
        $end_Date = null;

        if($election) {
            $start_Date = $election->start_date;
            $end_Date = $election->end_date;
        }

        return view('livewire.admin-pages.admin-settings',[
            'start_Date' => $start_Date,
            'end_Date' => $end_Date
        ]);
    }
}
