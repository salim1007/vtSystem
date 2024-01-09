<?php

namespace App\Livewire\AdminPages;

use App\Models\ElectionDate;
use Carbon\Carbon;
use Livewire\Component;

class AdminSettings extends Component
{
    public $start_date;
    public $end_date;
    public function submitElectionDates()
    {
        //check if date exists in the database ....it must only be one date....
        $start_date = Carbon::parse($this->start_date);
        $end_date = Carbon::parse($this->end_date);

        $election = new ElectionDate();
        $election->start_date = Carbon::create($start_date->year, $start_date->month, $start_date->day, 0, 0, 0);
        $election->end_date = Carbon::create($end_date->year, $end_date->month, $end_date->day, 0, 0, 0);
        $election->save();

        dd('dates successfully submitted!');
    }
    public function render()
    {
        return view('livewire.admin-pages.admin-settings');
    }
}
