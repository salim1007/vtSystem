<?php

namespace App\Livewire\AdminPages;

use App\Models\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminMailbox extends Component
{
    public $sender_reg_no;
    public $sender_full_name;
    public $sender_college;
    public $sender_year;
    public function logout(){
        Auth::logout();

        session()->forget('jwt_token');

        return redirect()->to('/login');


    }

    public function findSender(){
        $validated = $this->validate([
            'sender_reg_no' => 'required'
        ]);

        if(User::where('regNo',$this->sender_reg_no)->exists()) {
            $sender = User::where('regNo', $this->sender_reg_no)->first();
            $this->sender_full_name = $sender->firstname . ' ' . $sender->midname . ' ' . $sender->surname;
            $this->sender_college = $sender->college;
            $this->sender_year = $sender->yearOfStudy;
        }else{

            session()->flash('find_error','The user does not exist');
        }

    }
    public function render()
    {
        $mails = Mail::all();
        return view('livewire.admin-pages.admin-mailbox',[
            'mails' => $mails,
        ]);
    }
}
