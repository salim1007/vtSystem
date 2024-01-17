<?php

namespace App\Livewire\AdminPages;


use App\Models\Candidate;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminProgressPage extends Component
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
        }
    }
    public function generatePDF()
    {
        $results = Candidate::all();
        $html = view('livewire.admin-pages.create-p-d-f', compact('results'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $output = $dompdf->output();
        return response()->streamDownload(function () use ($output) {
            echo $output;
        }, 'output.pdf');
    }

    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }

    public function render()
    {
        return view('livewire.admin-pages.admin-progress-page');
    }
}
