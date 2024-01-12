<?php

namespace App\Livewire\AdminPages;


use App\Models\Candidate;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminProgressPage extends Component
{
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
        }, 'result.pdf');
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
